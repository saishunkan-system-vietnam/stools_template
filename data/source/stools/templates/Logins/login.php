<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - UIkit 3 KickOff</title>
        <link rel="icon" href="img/favicon.ico">
        <!-- CSS FILES -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
        <?= $this->Html->css('login-dark.css'); ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.3/dist/semantic.min.css">
    </head>
    <body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport>
        <!-- overlay -->
        <div class="uk-position-cover uk-overlay-primary"></div>
        <!-- /overlay -->
        <div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
        <p class="uk-text-small uk-text-center">Copyright 2020 - <a href="https://vn.saishunkansys.com">Saishunkan System Vietnam</a> | Powered by <a href="https://vn.saishunkansys.com" title="Visit Saishunkan System Vietnam site" target="_blank" data-uk-tooltip><?= $this->Html->image('logo-30x30px.svg', ['alt' => 'Saishunkan System Vietnam']); ?></a> </p>
        </div>
        <div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">
            
            <div class="uk-text-center uk-margin">
                <?= $this->Html->image('ssv-new-logo-menu-bar.svg', ['alt' => 'Logo']) ?>
            </div>

            <!-- login -->
            <div class="ui form toggle-class">
                <?= $this->Form->create(null, ['id' => 'loginForm']); ?>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin-small">
                        <div class="ui fluid search selection dropdown">
                            <input type="hidden" name="language" value="<?= h($language); ?>">
                            <i class="dropdown icon"></i>
                            <div class="text">
                                <?php if ($language === "ja_JP") : ?>
                                    <i class="jp flag"></i>日本語
                                <?php elseif ($language === "en_US") : ?>
                                    <i class="us flag"></i>English
                                <?php else : ?>
                                    <i class="vn flag"></i>Tiếng Việt
                                <?php endif; ?>
                            </div>
                            <div class="menu">
                                <div class="item" data-value="ja_JP"><i class="jp flag"></i>日本語</div>
                                <div class="item" data-value="en_US"><i class="us flag"></i>English</div>
                                <div class="item" data-value="vi_VN"><i class="vn flag"></i>Tiếng Việt</div>
                            </div>
                        </div>
                    </div>
                        <div class="uk-margin-small">
                            <div class="ui icon input uk-width-1-1">
                                <input type="text" name="username" placeholder="<?= __('Username'); ?>">
                                <i class="user icon"></i>
                            </div>
                        </div>
                        <div class="uk-margin-small">
                            <div class="ui icon input uk-width-1-1">
                                <input type="password" name="password" placeholder="<?= __('Password'); ?>">
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="uk-margin-small">
                            <label><input class="uk-checkbox" type="checkbox"> <?= __('Keep me logged in'); ?></label>
                        </div>
                        <div class="uk-margin-bottom">
                            <button type="button" class="uk-button uk-button-primary uk-border-pill uk-width-1-1"><?= __('LOG IN'); ?></button>
                        </div>
                </fieldset>
                <?= $this->Form->end(); ?>
            </div>
            <!-- /login -->

            <!-- recover password -->
            <div class="toggle-class" hidden>
                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
                        <input class="uk-input uk-border-pill" placeholder="<?= __('E-mail'); ?>" required type="text">
                    </div>
                </div>
                <div class="uk-margin-bottom">
                    <button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1"><?= __('SEND PASSWORD'); ?></button>
                </div>
            </div>
            <!-- /recover password -->
            
            <!-- action buttons -->
            <div>
                <div class="uk-text-center">
                    <a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade"><?= __('Forgot your password?'); ?></a>
                    <a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden><span data-uk-icon="arrow-left"></span> <?= __('Back to Login'); ?></a>
                </div>
            </div>
            <!-- action buttons -->
        </div>
        
        <!-- JS FILES -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.3/dist/semantic.min.js"></script>
        <script>
            $('.ui.selection.dropdown').dropdown({
                onChange: function(value, text, $selectedItem) {
                    $('<input type="text" name="action" value="changeLanguage" />').appendTo($('#loginForm'));
                    $('#loginForm').submit();
                }
            });
        </script>
    </body>
</html>