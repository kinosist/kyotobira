(function($) {
    // 警告のメッセージ
    var message = '入力内容が一部変更済みです';
    // 対象フォーム格納用jQueryオブジェクト
    var forms = $();
    // デフォルト値
    var defaults = '';
    // window.beforeunload適用済みかどうかのフラグ
    var initialized = false;
    // フォームでのSubmit時だけは警告を出さないためのフラグ
    var submit = false;
    // プラグイン本体
    $.fn.watchInputChange = function(options) {
        var form = this;
        $(function() {
            // Submit時にフラグを立てる
            form.on('submit.wic', function() {
                submit = true;
                // Ajaxフォームの場合はonBeforeUnloadが動かないので
                // 0.5秒後に元に戻す（ビミョー実装）
                setTimeout(function() {
                    submit = false;
                }, 500);
            });
            // 対象フォームをjQueryオブジェクトに追加
            forms = forms.add(form);
            // デフォルト値をセット
            defaults = forms.serialize();
            // window.beforeunload適用（初回のみ）
            if (!initialized) {
                initialized = true;
                $(window).on('beforeunload.wic', function() {
                    // フォームでのSubmitの場合は無視
                    if (submit) {
                        submit = false;
                        return;
                    }
                    // 対象フォームの現データとデフォルト値を比較
                    if (forms.serialize() !== defaults) {
                        // 違いがあればメッセージ表示
                        return message;
                    }
                });
            }
        });
        return forms;
    };
})(jQuery);
