<!DOCTYPE html>
	<html lang="zh-CN">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>登录 &lsaquo;  &#8212; WordPress</title>
	<meta name='robots' content='max-image-preview:large, noindex, noarchive' />
<link rel='stylesheet' id='blocksy-dynamic-global-css' href='http://localhost/wp-content/uploads/blocksy/css/global.css?ver=47504' media='all' />
<link rel='stylesheet' id='dashicons-css' href='http://localhost/wp-includes/css/dashicons.min.css?ver=6.2' media='all' />
<link rel='stylesheet' id='buttons-css' href='http://localhost/wp-includes/css/buttons.min.css?ver=6.2' media='all' />
<link rel='stylesheet' id='forms-css' href='http://localhost/wp-admin/css/forms.min.css?ver=6.2' media='all' />
<link rel='stylesheet' id='l10n-css' href='http://localhost/wp-admin/css/l10n.min.css?ver=6.2' media='all' />
<link rel='stylesheet' id='login-css' href='http://localhost/wp-admin/css/login.min.css?ver=6.2' media='all' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="http://localhost/wp-content/uploads/2022/09/cropped-图标-150x150.png" sizes="32x32" />
<link rel="icon" href="http://localhost/wp-content/uploads/2022/09/cropped-图标-200x200.png" sizes="192x192" />
<link rel="apple-touch-icon" href="http://localhost/wp-content/uploads/2022/09/cropped-图标-200x200.png" />
<meta name="msapplication-TileImage" content="http://localhost/wp-content/uploads/2022/09/cropped-图标-300x300.png" />
	</head>
	<body class="login no-js login-action-login wp-core-ui  locale-zh-cn">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://cn.wordpress.org/">基于WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/wp-login.php" method="post">
			<p>
				<label for="user_login">用户名或电子邮箱地址</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">密码</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="显示密码">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">记住我</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" />
									<input type="hidden" name="redirect_to" value="http://localhost/wp-admin/" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
				<a href="http://localhost/wp-login.php?action=lostpassword">忘记密码？</a>			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="http://localhost/">&larr; 返回到</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">
							语言						</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="zh_CN" lang="zh" selected='selected' data-installed="1">简体中文</option></select>
					
					
					
						<input type="submit" class="button" value="更改">

					</form>
				</div>
				<script src='http://localhost/wp-includes/js/jquery/jquery.min.js?ver=3.6.3' id='jquery-core-js'></script>
<script src='http://localhost/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0' id='jquery-migrate-js'></script>
<script id='zxcvbn-async-js-extra'>
var _zxcvbnSettings = {"src":"http:\/\/localhost\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src='http://localhost/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script src='http://localhost/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
<script src='http://localhost/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js'></script>
<script src='http://localhost/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script src='http://localhost/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
<script src='http://localhost/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id='password-strength-meter-js-extra'>
var pwsL10n = {"unknown":"\u5bc6\u7801\u5f3a\u5ea6\u672a\u77e5","short":"\u975e\u5e38\u5f31","bad":"\u5f31","good":"\u4e2d\u7b49","strong":"\u5f3a","mismatch":"\u4e0d\u5339\u914d"};
</script>
<script id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-26 03:34:37+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_CN"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["\u81ea%2$s\u7248\u5f00\u59cb\uff0c%1$s\u5df2\u7ecf\u6dd8\u6c70\uff0c\u8bf7\u6539\u7528%3$s\u3002\u8bf7\u8003\u8651\u64b0\u5199\u66f4\u5177\u517c\u5bb9\u6027\u7684\u4ee3\u7801\u3002"]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script src='http://localhost/wp-admin/js/password-strength-meter.min.js?ver=6.2' id='password-strength-meter-js'></script>
<script src='http://localhost/wp-includes/js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
<script id='wp-util-js-extra'>
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
</script>
<script src='http://localhost/wp-includes/js/wp-util.min.js?ver=6.2' id='wp-util-js'></script>
<script id='user-profile-js-extra'>
var userProfileL10n = {"user_id":"0","nonce":"39358534c1"};
</script>
<script id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-03-26 03:34:37+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_CN"},"Your new password has not been saved.":["\u60a8\u7684\u65b0\u5bc6\u7801\u672a\u88ab\u4fdd\u5b58\u3002"],"Hide":["\u9690\u85cf"],"Show":["\u663e\u793a"],"Confirm use of weak password":["\u786e\u8ba4\u4f7f\u7528\u5f31\u5bc6\u7801"],"Hide password":["\u9690\u85cf\u5bc6\u7801"],"Show password":["\u663e\u793a\u5bc6\u7801"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script src='http://localhost/wp-admin/js/user-profile.min.js?ver=6.2' id='user-profile-js'></script>
	<div class="clear"></div>
	</body>
	</html>
	