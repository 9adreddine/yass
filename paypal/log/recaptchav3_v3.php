
<!-- saved from url=(0063)https://www.paypalobjects.com/authchallenge/recaptchav3_v3.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.grecaptcha-badge{
			bottom: 3px !important;
		}
	</style>
	<script type="text/javascript" async="" src="./recaptcha__fr.js.tÚlÚchargement"></script><script>

		var pp_loc_map = {"ar_EG":"ar","da_DK":"da","de_DE":"de","de_DE_AT":"de-AT","de_DE_CH":"de-CH","en_AU":"en",
			"en_GB":"en-GB","en_US":"en","es_ES":"es","es_XC":"es-419","fr_CA":"fr-CA","fr_FR":"fr",
			"fr_XC":"fr","he_IL":"iw","id_ID":"id","it_IT":"it","ja_JP":"ja","ko_KR":"ko","nl_NL":"nl",
			"no_NO":"no","pl_PL":"pl","pt_BR":"pt-BR","pt_PT":"pt-PT","ru_RU":"ru","sv_SE":"sv","th_TH":"th",
			"tr_TR":"tr","zh_CN":"zh-CN","zh_HK":"zh-HK","zh_TW":"zh-TW","zh_XC":"zh-CN","ar":"ar","da":"da",
			"de":"de","en":"en","es":"es","fr":"fr","id":"id","ko":"ko","pt":"pt","ru":"ru","zh":"zh-CN"};


		function getGoogLocale(l,c){
			try{
				var loc_lower = l.toLowerCase();
				if(c !== undefined && (c.toLowerCase() === 'at' || c.toLowerCase() === 'ch') && (l === 'de_DE')) {
					l = l + '_' + c.toUpperCase();
				}
				if(loc_lower.indexOf('rowlite') !== -1 || loc_lower.indexOf('groupa') !== -1 || loc_lower.indexOf('groupb') !== -1 || loc_lower.indexOf('groupc') !== -1) {
					l = loc_lower.substring(0,2);
				}
			}catch (e) {
				//do nothing
			}
			return pp_loc_map[l] || 'en';
		}


		function renderRecaptchaV3(data) {
			var source = document.createElement("script");
			source.src = 'https://www.recaptcha.net/recaptcha/api.js?render=' + data.skey + '&hl=' + getGoogLocale(data.locale, data.country);
			source.async = true;
			source.onload = function() {
				grecaptcha.ready(function() {
					try {
						grecaptcha.execute(data.skey, {action: data.action})
								.then(function(token) {
									window.parent.postMessage(JSON.stringify({
										token: token,
										source: 'adframe'
									}), '*');
								});
					} catch (e) {
						window.parent.postMessage(JSON.stringify({
							error: 'recaptchav3_error',
							source: 'adframe'
						}), '*');
					}
				});
			};
			document.body.appendChild(source);
		}
		function initReCaptcha() {
			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent",
					eventer = window[eventMethod],
					messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message",
					mouseOverEvent = eventMethod == "attachEvent" ? "onmouseover" : "mouseover",
					mouseLeaveEvent = eventMethod == "attachEvent" ? "onmouseleave" : "mouseleave",
					clickEvent = eventMethod == "attachEvent" ? "onclick" : "click";
			eventer(messageEvent,function(event) {
				var data;
				try {
					if(event.data === 'recaptcha-setup'){
						return;
					}
					// Domain check
					if (event && !isPayPalDomain(event.origin)) {
						window.parent.postMessage(JSON.stringify({
							error: 'non_paypal_domain',
							source: 'adframe'
						}), '*');
						return;
					}
					data = event && JSON.parse(event.data);
				} catch(e) {
					window.parent.postMessage(JSON.stringify({
						error: 'error_parsing_data',
						source: 'adframe'
					}), '*');
					return;
				}

				// Invalid request source or request data
				if (!data || data.source !== 'ADS') {
					return;
				}

				// Handle recaptcha intent
				if (data.skey) {
					renderRecaptchaV3(data);
				}
			},false);

			function openwidget(){
				window.parent.postMessage(JSON.stringify({
					reason: 'size',
					state: 'OPEN',
					source: 'adframe'
					}), '*');
			}
			document[eventMethod](mouseOverEvent, openwidget);
			document[eventMethod](clickEvent, openwidget);
			document[eventMethod](mouseLeaveEvent, function(){
				window.parent.postMessage(JSON.stringify({
					reason: 'size',
					state: 'close',
					source: 'adframe'
					}), '*');
			});
		}
		function isPayPalDomain(domain) {
			var paypalDomainRegex = /\.paypal\.com$/ig;
			return paypalDomainRegex.test(domain);
		}
		initReCaptcha();
	</script>
</head>
<body>

<script src="./api.js.tÚlÚchargement" async=""></script><div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="./anchor.html" width="256" height="60" role="presentation" name="a-695ntk8gn1d8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe __idm_frm__="36" style="display: none;" src="./saved_resource(1).html"></iframe></div></body></html>