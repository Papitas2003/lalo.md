<!DOCTYPE html>
<!-- saved from url=(0067)https://m.facebook.com/?refsrc=https%3A%2F%2Fm.facebook.com%2F&_rdr -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Facebook - Log In or Sign Up</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1.0001,maximum-scale=1.0001,viewport-fit=cover">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/a36n03MSzp1.png" rel="apple-touch-icon-precomposed" sizes="120x120">
    <meta name="referrer" content="default" id="meta_referrer">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link type="text/css" rel="stylesheet" href="./Facebook - Log In or Sign Up_files/j2f7Ll6IVVm.css" data-bootloader-hash="sVEZ3">
    <link type="text/css" rel="stylesheet" href="./Facebook - Log In or Sign Up_files/R4lpd3sAqGa.css" data-bootloader-hash="piPs3">
    <script id="u_0_f">
        function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }
            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }
        envFlush({
            "timeslice_heartbeat_config": {
                "pollIntervalMs": 33,
                "idleGapThresholdMs": 60,
                "ignoredTimesliceNames": {
                    "requestAnimationFrame": true,
                    "Event listenHandler mousemove": true,
                    "Event listenHandler mouseover": true,
                    "Event listenHandler mouseout": true,
                    "Event listenHandler scroll": true
                },
                "isHeartbeatEnabled": true,
                "isArtilleryOn": false
            },
            "shouldLogCounters": true,
            "timeslice_categories": {
                "react_render": true,
                "reflow": true
            },
            "sample_continuation_stacktraces": true,
            "dom_mutation_flag": true
        });
    </script>
    <script>
        document.domain = 'facebook.com';
        /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) && location.replace(location.hash.substr(location.hash.indexOf("!") + 1));
    </script>
    <script>
        __DEV__ = 0;
    </script>
    <script id="u_0_g" src="./Facebook - Log In or Sign Up_files/2GJjMWQFFdx.js.download" data-bootloader-hash="IMOVy"></script>
    <script id="u_0_d">
        CavalryLogger = window.CavalryLogger || function(a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {
                t_cstart: window._cstart
            }, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function(a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function(a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function() {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
            console.timeStamp(a)
        } : function() {}, CavalryLogger.prototype.addPiggyback = function(a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.disableArtilleryOnUntilOffLogging = !1, CavalryLogger.getInstance = function(a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function(a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function() {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function() {}, CavalryLogger.prototype.profileEarlyResources = function() {}, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}, CavalryLogger.start_js = function() {}, CavalryLogger.done_js = function() {};
        CavalryLogger.getInstance().setTTIEvent("t_domcontent");
        CavalryLogger.prototype.measureResources = function(a, b) {
            if (!this.log_resources) return;
            var c = "bootload/" + a.name;
            if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
            var d = CavalryLogger.now();
            this.ongoing_watch[c] = d;
            "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
            b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
            if (a.type === "js") {
                c = "js_exec/" + a.name;
                this.ongoing_watch[c] = d
            }
        }, CavalryLogger.prototype.stopWatch = function(a) {
            if (this.ongoing_watch[a]) {
                var b = CavalryLogger.now(),
                    c = b - this.ongoing_watch[a];
                this.bootloader_metrics[a] = c;
                var d = this.piggy_values;
                a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                delete this.ongoing_watch[a]
            }
            return this
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
            var a = {};
            Object.values(window.CavalryLogger.instances).forEach(function(b) {
                b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
            });
            return a
        }, CavalryLogger.start_js = function(a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
        }, CavalryLogger.done_js = function(a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
        }, CavalryLogger.prototype.profileEarlyResources = function(a) {
            for (var b = 0; b < a.length; b++) this.measureResources({
                name: a[b][0],
                type: a[b][1] ? "js" : ""
            }, "_EF_")
        };
        CavalryLogger.getInstance().log_resources = true;
        CavalryLogger.getInstance().setIsDetailedProfiler(true);
        window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <script id="u_0_e">
        (function _(a, b, c, d) {
            function e(a) {
                document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
            }

            function f(a, b) {
                document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
            }
            if (!a) {
                e(b);
                e(c);
                return
            }
            a = null;
            (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document.documentElement.offsetWidth, a = Math.max(1, Math.floor(a * 2) / 2)));
            (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96, a = Math.max(1, Math.round(a * 2) / 2));
            f(b, (a || window.devicePixelRatio || 1).toString());
            e = window.screen ? screen.width : 0;
            b = window.screen ? screen.height : 0;
            f(c, e + "x" + b);
            d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
        })(true, "m_pixel_ratio", "wd", false);
    </script>
    <meta name="description" content="Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
    <link rel="canonical" href="https://www.facebook.com/">
    <link href="./Facebook - Log In or Sign Up_files/qgkhUdqe5-l.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/qgkhUdqe5-l.js.download" async=""></script>
    <link href="./Facebook - Log In or Sign Up_files/n_1BkOgKTPD.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/n_1BkOgKTPD.js.download" async=""></script>
    <link href="./Facebook - Log In or Sign Up_files/RDJfG0BJTQx.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/RDJfG0BJTQx.js.download" async=""></script>
    <link href="./Facebook - Log In or Sign Up_files/iqui8t90Ewf.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/iqui8t90Ewf.js.download" async=""></script>
    <link href="./Facebook - Log In or Sign Up_files/Yl1gyBI8wWg.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/Yl1gyBI8wWg.js.download" async=""></script>
    <link href="./Facebook - Log In or Sign Up_files/PHDuf9d2gWe.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/PHDuf9d2gWe.js.download" async=""></script>
    <link href="./Facebook - Log In or Sign Up_files/svFKQXueTby.js.download" rel="preload" as="script">
    <script src="./Facebook - Log In or Sign Up_files/svFKQXueTby.js.download" async=""></script>
</head>

<body tabindex="0" class="touch x2 ios sf mSafari _fzu _50-3 iframe acw portrait" style="min-height: 735px; background-color: rgb(255, 255, 255);">
    <script id="u_0_c">
        (function(a) {
            a.__updateOrientation = function() {
                var b = !!a.orientation && a.orientation !== 180,
                    c = document.body;
                c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
                return b
            }
        })(window);
    </script>
    <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 735px;">
        <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
        <div id="page" class="">
            <div class="_129_" id="header-notices"></div>
            <div class="_7om2 _52we _52z5" id="header">
                <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter"><a href="https://m.facebook.com/login/?refid=8"><i class="img sp_sJW2P2tLEpz_2x sx_a537e4"><u>facebook</u></i></a></div>
            </div>
            <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane" style="min-height: 735px;">
                <div class="_7om2">
                    <div class="_4g34" id="u_0_0">
                        <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
                            <div class="_52jd"></div>
                        </div>
                        <div class="aclb _4-4l">
                            <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
                                <div class="_qw9 grouped aclb">
                                    <a href="https://m.facebook.com/click.php?redir_url=http%3A%2F%2Fitunes.apple.com%2Fapp%2Ffacebook%2Fid284882215%3Freferrer_params%255Blink_source%255D%3Dfb_app_banner&amp;app_id=6628568379&amp;cref=mb&amp;no_fw=1&amp;refid=8" target="_top" class="touchableArea first last area touchable acy apl abt abb" data-sigil="touchable marea">
                                        <div class="ib cc"><i class="img l img _2sxw" style="background-image: url(&#39;https\3a //static.xx.fbcdn.net/rsrc.php/v3/yP/r/JJsC9S33ata.png&#39;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:18px;height:32px;"></i>
                                            <div class="c"><span class="fcl">Get Facebook for iPhone and browse faster.</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="_5rut">
                                <form method="post" action="https://m.facebook.com/login/device-based/login/async/?refsrc=https%3A%2F%2Fm.facebook.com%2F&amp;lwv=100" class="mobile-login-form _5spm" id="login_form" novalidate="1" data-sigil="m_login_form" data-autoid="autoid_2">
                                    <input type="hidden" name="lsd" value="AVoC---5" autocomplete="off">
                                    <input type="hidden" name="jazoest" value="2517" autocomplete="off">
                                    <input type="hidden" name="m_ts" value="1575725871">
                                    <input type="hidden" name="li" value="L6vrXYRacqpbDvSN_eX9X3Yl">
                                    <input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number">
                                    <input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries">
                                    <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                    <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                    <div id="otp_retrieve_desc_container"></div>
                                    <div class="_56be _5sob">
                                        <div class="_55wo _55x2 _56bf">
                                            <div id="email_input_container">
                                                <input autocorrect="off" autocapitalize="off" type="email" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" name="email" placeholder="Mobile number or email" data-sigil="m_login_email">
                                            </div>
                                            <div>
                                                <div class="_1upc _mg8" data-sigil="m_login_password">
                                                    <div class="_7om2">
                                                        <div class="_4g34 _5i2i _52we">
                                                            <div class="_5xu4">
                                                                <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="m_login_password" name="pass" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input">
                                                            </div>
                                                        </div>
                                                        <div class="_5s61 _216i _5i2i _52we">
                                                            <div class="_5xu4">
                                                                <div class="_2pi9" style="display:none" id="u_0_1"><a href="https://m.facebook.com/?refsrc=https%3A%2F%2Fm.facebook.com%2F&amp;_rdr#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_2">HIDE</span><span class="mfss" id="u_0_3">SHOW</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2pie" style="text-align:center;">
                                        <div id="u_0_4" data-sigil="login_password_step_element">
                                            <button type="button" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login" data-sigil="touchable login_button_block m_login_button" data-autoid="autoid_4"><span class="_55sr">Log In</span></button>
                                        </div>
                                        <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                                        <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                                        <div id="otp_button_elem_container"></div>
                                    </div>
                                    <input type="hidden" name="prefill_contact_point" id="prefill_contact_point">
                                    <input type="hidden" name="prefill_source" id="prefill_source">
                                    <input type="hidden" name="prefill_type" id="prefill_type">
                                    <input type="hidden" name="first_prefill_source" id="first_prefill_source">
                                    <input type="hidden" name="first_prefill_type" id="first_prefill_type">
                                    <input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false">
                                    <input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false">
                                    <input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false">
                                    <div class="_xo8"></div>
                                    <noscript>
                                        <input type="hidden" name="_fb_noscript" value="true" />
                                    </noscript>
                                </form>
                                <div>
                                    <div class="_43mg _8qtb"><span class="_43mh">or</span></div>
                                    <div class="_52jj _5t3b" id="u_0_5"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" tabindex="0" data-sigil="m_reg_button" data-autoid="autoid_3">Create New Account</a></div>
                                </div>
                                <div>
                                    <div class="other-links _8p_m">
                                        <ul class="_5pkb _55wp">
                                            <li><span class="mfss fcg"><a tabindex="0" href="https://m.facebook.com/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=100&amp;refid=8" id="forgot-password-link">Forgot Password?</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:none"></div><span><img src="./Facebook - Log In or Sign Up_files/hsts-pixel.gif" width="0" height="0" style="display:none"></span>
                <div class="_55wr _5ui2" data-sigil="m_login_footer">
                    <div class="_5dpw">
                        <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                            <div class="_7om2">
                                <div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">English (US)</span>
                                    <div class="_3ztc"><span class="_52jc"><a href="https://m.facebook.com/a/language.php?l=ja_JP&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;gfid=AQDRloweUEy-6cqK&amp;refid=8" data-locale="ja_JP" data-sigil="change_language">日本語</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a href="https://m.facebook.com/a/language.php?l=pt_BR&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;gfid=AQCO3sxiTT7Wf7k9&amp;refid=8" data-locale="pt_BR" data-sigil="change_language">Português (Brasil)</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a href="https://m.facebook.com/a/language.php?l=de_DE&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;gfid=AQCKkkBG8ykhG2MI&amp;refid=8" data-locale="de_DE" data-sigil="change_language">Deutsch</a></span></div>
                                </div>
                                <div class="_4g34">
                                    <div class="_3ztc"><span class="_52jc"><a href="https://m.facebook.com/a/language.php?l=zh_CN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;gfid=AQDc6q3UbDh97U1Y&amp;refid=8" data-locale="zh_CN" data-sigil="change_language">中文(简体)</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a href="https://m.facebook.com/a/language.php?l=es_LA&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;gfid=AQBnqcZjf_wCgKEj&amp;refid=8" data-locale="es_LA" data-sigil="change_language">Español</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a href="https://m.facebook.com/a/language.php?l=fr_FR&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;gfid=AQC9EZbnbDHa7WTw&amp;refid=8" data-locale="fr_FR" data-sigil="change_language">Français (France)</a></span></div>
                                    <a href="https://m.facebook.com/language.php?n=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fm.facebook.com%252F&amp;refid=8">
                                        <div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages" data-sigil="more_language"><i class="img sp_sJW2P2tLEpz_2x sx_ceef21"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_5ui4"><span class="mfss fcg">Facebook Inc.</span></div>
                    </div>
                </div>
            </div>
            <div class=""></div>
            <div class="viewportArea _2v9s" style="display:none" id="u_0_6" data-sigil="marea">
                <div class="_5vsg" id="u_0_7" style="max-height: 206px;"></div>
                <div class="_5vsh" id="u_0_8" style="max-height: 367px;"></div>
                <div class="_5v5d fcg">
                    <div class="_2so _2sq _2ss img _50ch" data-animtype="3" data-sigil="m-loading-indicator-root">
                        <div class="_2sr" data-sigil="m-loading-indicator-animate"></div>
                    </div>Loading...</div>
            </div>
            <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
                <div class="container">
                    <div class="image"></div>
                    <div class="message" data-sigil="error-message"></div><a class="link" data-sigil="MPageError:retry">Try Again</a></div>
            </div>
        </div>
    </div>
    <div id="static_templates">
        <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_1">
            <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                <div class="_7om2 _52we">
                    <div class="_5s61">
                        <div class="_52z7">
                            <button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_a" data-sigil="dialog-cancel-button">Cancel</button>
                            <button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_b" data-sigil="dialog-back-button"><i class="img sp_sJW2P2tLEpz_2x sx_914267" style="margin-top: 2px;"></i></button>
                        </div>
                    </div>
                    <div class="_4g34">
                        <div class="_52z6">
                            <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Loading...</div>
                        </div>
                    </div>
                    <div class="_5s61">
                        <div class="_52z8" id="modalDialogHeaderButtons"></div>
                    </div>
                </div>
            </div>
            <div class="modalDialogView" id="modalDialogView"></div>
            <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                <div class="_2so _2sq _2ss img _50ch" data-animtype="3" id="u_0_9" data-sigil="m-loading-indicator-root">
                    <div class="_2sr" data-sigil="m-loading-indicator-animate"></div>
                </div>Loading...</div>
        </div>
    </div>
    <script id="u_0_h" src="./Facebook - Log In or Sign Up_files/D9MtH7fnndn.js.download" data-bootloader-hash="rhY/c"></script>
    <script id="u_0_i" src="./Facebook - Log In or Sign Up_files/BOk21JEBqK8.js.download" data-bootloader-hash="vgA39"></script>
    <script id="u_0_j" src="./Facebook - Log In or Sign Up_files/FPfzC-mUix5.js.download" data-bootloader-hash="mSBrt"></script>
    <script id="u_0_k">
        requireLazy(["gkx"], function(gkx) {
            gkx.add({
                "946894": {
                    "result": false,
                    "hash": "AT56HnwRxu1qJKIb"
                },
                "676920": {
                    "result": false,
                    "hash": "AT6imhay_4JIp5AA"
                },
                "676921": {
                    "result": false,
                    "hash": "AT6WJ0Eo72WDGWs2"
                },
                "1113247": {
                    "result": false,
                    "hash": "AT5f9gNH5yGFdwh1"
                },
                "676922": {
                    "result": false,
                    "hash": "AT7fm4EKMempg2yp"
                },
                "1167394": {
                    "result": false,
                    "hash": "AT7WbaAsf6gMomY4"
                },
                "676837": {
                    "result": false,
                    "hash": "AT4gSSjwyFQYVx8Y"
                }
            });
        });
        require("TimeSliceImpl").guard(function() {
            (require("ServerJSDefine")).handleDefines([
                ["cr:717822", ["TimeSliceImpl"], {
                    "__rc": ["TimeSliceImpl", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                }, -1],
                ["cr:696703", [], {
                    "__rc": [null, "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                }, -1],
                ["cr:1100101", ["requestAnimationFrameAcrossTransitionsSimple"], {
                    "__rc": ["requestAnimationFrameAcrossTransitionsSimple", "Aa1rtTz9Om_xth74_GJeZpFgL6aiLpmLArvXYcDcquRkT6op2S_8isSCeC0Zy4rPtQkiazk"]
                }, -1],
                ["cr:1000292", ["BanzaiNew"], {
                    "__rc": ["BanzaiNew", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                }, -1],
                ["cr:729414", [], {
                    "__rc": [null, "Aa1eN1b9D3Et9PYpEenP6Xy8zsyuD-W4zmEcpwMgOLz4DbHgo8yj0d8LZxC-OIfmB3q4KXIT7Ft9VU_Pw5u7"]
                }, -1],
                ["cr:692209", ["cancelIdleCallbackBlue"], {
                    "__rc": ["cancelIdleCallbackBlue", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                }, -1],
                ["ArtilleryExperiments", [], {
                    "artillery_static_resources_pagelet_attribution": false,
                    "artillery_timeslice_compressed_data": false,
                    "artillery_miny_client_payload": false,
                    "artillery_prolong_page_tracing": false,
                    "artillery_navigation_timing_level_2": false,
                    "artillery_profiler_on": false,
                    "artillery_merge_max_distance_sec": 1,
                    "artillery_merge_max_duration_sec": 1,
                    "user_timing": false
                }, 1237],
                ["BootloaderConfig", [], {
                    "jsRetries": null,
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "payloadEndpointURI": "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/",
                    "preloadBE": false,
                    "assumeNotNonblocking": false,
                    "trackUnpredictedBEResources": true,
                    "shouldCoalesceModuleRequestsMadeInSameTick": true,
                    "staggerJsDownloads": false,
                    "preloader_num_preloads": 0,
                    "preloader_preload_after_dd": false,
                    "preloader_num_loads": 1,
                    "preloader_enabled": false,
                    "retryQueuedBootloads": false,
                    "silentDups": false,
                    "asyncPreloadBoost": true
                }, 329],
                ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619],
                ["ServerNonce", [], {
                    "ServerNonce": "asD3F7GOAt9uppgrqH1gvg"
                }, 141],
                ["UriNeedRawQuerySVConfig", [], {
                    "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx"]
                }, 3871],
                ["ImmediateImplementationExperiments", [], {
                    "prefer_message_channel": true
                }, 3419],
                ["PromiseUsePolyfillSetImmediateGK", [], {
                    "www_always_use_polyfill_setimmediate": false
                }, 2190],
                ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": true
                }, 4548],
                ["CurrentCommunityInitialData", [], {}, 490],
                ["CurrentUserInitialData", [], {
                    "USER_ID": "0",
                    "ACCOUNT_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "APP_ID": "412378670482"
                }, 270],
                ["MRequestConfig", [], {
                    "dtsg": {
                        "token": "AQE2_rC2nWEs:AQEwnR_IM63J",
                        "valid_for": 86400,
                        "expire": 1575812271
                    },
                    "dtsg_ag": {
                        "token": "AQxv7VQxdbsl2XVO8X301t8eSDvw9N929PLN8yqXjtZt-g:AQymOr3V98mH_H4NUw8Z_CVjzwrHesW5TFBzNwtZm7d1dQ",
                        "valid_for": 604800,
                        "expire": 1576330671
                    },
                    "lsd": "AVoC---5",
                    "checkResponseOrigin": true,
                    "checkResponseToken": true,
                    "cleanFinishedRequest": false,
                    "cleanFinishedPrefetchRequests": false,
                    "ajaxResponseToken": {
                        "secret": "hn_V12jXieB7KmdjgKh0bk2vzaWB7UoJ",
                        "encrypted": "AYk-KaR8WPWztn3zD3W2RELdznfemFZV4fK84PwSkAqpjf2PqWbug_ZJDZIdlm5SkjqhBcsC-rXDkkgQEm6gjoXCU9XjzBORgov-Jbpfd09YVQ"
                    }
                }, 51],
                ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111],
                ["ISB", [], {}, 330],
                ["LSD", [], {
                    "token": "AVoC---5"
                }, 323],
                ["SiteData", [], {
                    "server_revision": 1001512753,
                    "client_revision": 1001512753,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "FW_EXP:mtouch_pkg",
                    "pr": 2,
                    "haste_site": "mobile",
                    "ir_on": true,
                    "is_rtl": false,
                    "is_comet": false,
                    "hsi": "6767691084278792366-0",
                    "spin": 0,
                    "__spin_r": 1001512753,
                    "__spin_b": "trunk",
                    "__spin_t": 1575725871,
                    "vip": "157.240.15.35"
                }, 317],
                ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328],
                ["ErrorDebugHooks", [], {
                    "SnapShotHook": null
                }, 185],
                ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907],
                ["RunGatingConfig", [], {
                    "shouldUseBrowserUnload": true
                }, 3914],
                ["CookieCoreConfig", [], {
                    "a11y": {},
                    "act": {},
                    "c_user": {},
                    "dpr": {
                        "t": 604800
                    },
                    "js_ver": {
                        "t": 604800
                    },
                    "locale": {
                        "t": 604800
                    },
                    "m_pixel_ratio": {
                        "t": 604800
                    },
                    "noscript": {},
                    "pnl_data2": {
                        "t": 2
                    },
                    "presence": {},
                    "sfau": {},
                    "wd": {
                        "t": 604800
                    },
                    "x-referer": {},
                    "x-src": {
                        "t": 1
                    }
                }, 2104],
                ["CookieCoreLoggingConfig", [], {
                    "maximumIgnorableStallMs": 16.67,
                    "sampleRate": 9.7e-5,
                    "sampleRateClassic": 1.0e-10,
                    "sampleRateFastStale": 1.0e-8
                }, 3401],
                ["MBanzaiConfig", [], {
                    "EXPIRY": 86400000,
                    "MAX_SIZE": 10000,
                    "MAX_WAIT": 30000,
                    "RESTORE_WAIT": 30000,
                    "gks": {
                        "boosted_component": true,
                        "platform_oauth_client_events": true,
                        "visibility_tracking": true,
                        "xtrackable_clientview_batch": true,
                        "boosted_pagelikes": true,
                        "gqls_web_logging": true
                    },
                    "blacklist": ["time_spent"]
                }, 32],
                ["MJSEnvironment", [], {
                    "IS_APPLE_WEBKIT_IOS": true,
                    "IS_TABLET": false,
                    "IS_ANDROID": false,
                    "IS_CHROME": false,
                    "IS_FIREFOX": false,
                    "IS_WINDOWS_PHONE": false,
                    "IS_SAMSUNG_DEVICE": false,
                    "OS_VERSION": 11,
                    "PIXEL_RATIO": 2,
                    "BROWSER_NAME": "Mobile Safari"
                }, 46],
                ["UserAgentData", [], {
                    "browserArchitecture": "32",
                    "browserFullVersion": "11.0",
                    "browserMinorVersion": 0,
                    "browserName": "Mobile Safari",
                    "browserVersion": 11,
                    "deviceName": "iPhone",
                    "engineName": "WebKit",
                    "engineVersion": "604.1.38",
                    "platformArchitecture": "32",
                    "platformName": "iOS",
                    "platformVersion": "11",
                    "platformFullVersion": "11.0"
                }, 527],
                ["ZeroRewriteRules", [], {
                    "rewrite_rules": {},
                    "whitelist": {
                        "\/hr\/r": 1,
                        "\/hr\/p": 1,
                        "\/zero\/unsupported_browser\/": 1,
                        "\/zero\/policy\/optin": 1,
                        "\/zero\/optin\/write\/": 1,
                        "\/zero\/optin\/legal\/": 1,
                        "\/zero\/optin\/free\/": 1,
                        "\/about\/privacy\/": 1,
                        "\/about\/privacy\/update\/": 1,
                        "\/about\/privacy\/update": 1,
                        "\/zero\/toggle\/welcome\/": 1,
                        "\/zero\/toggle\/nux\/": 1,
                        "\/fup\/interstitial\/": 1,
                        "\/work\/landing": 1,
                        "\/work\/login\/": 1,
                        "\/work\/email\/": 1,
                        "\/ai.php": 1,
                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                        "\/qp\/interstitial\/": 1,
                        "\/qp\/action\/redirect\/": 1,
                        "\/qp\/action\/close\/": 1,
                        "\/zero\/support\/ineligible\/": 1,
                        "\/zero_balance_redirect\/": 1,
                        "\/zero_balance_redirect": 1,
                        "\/zero_balance_redirect\/l\/": 1,
                        "\/l.php": 1,
                        "\/lsr.php": 1,
                        "\/ajax\/dtsg\/": 1,
                        "\/checkpoint\/block\/": 1,
                        "\/exitdsite": 1,
                        "\/zero\/balance\/pixel\/": 1,
                        "\/zero\/balance\/": 1,
                        "\/zero\/balance\/carrier_landing\/": 1,
                        "\/zero\/flex\/logging\/": 1,
                        "\/tr": 1,
                        "\/tr\/": 1,
                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                        "\/bookmarks\/flyout\/body\/": 1,
                        "\/zero\/subno\/": 1,
                        "\/confirmemail.php": 1,
                        "\/policies\/": 1,
                        "\/mobile\/internetdotorg\/classifier\/": 1,
                        "\/zero\/dogfooding": 1,
                        "\/xti.php": 1,
                        "\/zero\/fblite\/config\/": 1,
                        "\/lite\/": 1,
                        "\/hr\/zsh\/wc\/": 1,
                        "\/4oh4.php": 1,
                        "\/autologin.php": 1,
                        "\/birthday_help.php": 1,
                        "\/checkpoint\/": 1,
                        "\/contact-importer\/": 1,
                        "\/cr.php": 1,
                        "\/legal\/terms\/": 1,
                        "\/login.php": 1,
                        "\/login\/": 1,
                        "\/mobile\/account\/": 1,
                        "\/n\/": 1,
                        "\/remote_test_device\/": 1,
                        "\/upsell\/buy\/": 1,
                        "\/upsell\/buyconfirm\/": 1,
                        "\/upsell\/buyresult\/": 1,
                        "\/upsell\/promos\/": 1,
                        "\/upsell\/continue\/": 1,
                        "\/upsell\/h\/promos\/": 1,
                        "\/upsell\/loan\/learnmore\/": 1,
                        "\/upsell\/purchase\/": 1,
                        "\/upsell\/promos\/upgrade\/": 1,
                        "\/upsell\/buy_redirect\/": 1,
                        "\/upsell\/loan\/buyconfirm\/": 1,
                        "\/upsell\/loan\/buy\/": 1,
                        "\/upsell\/sms\/": 1,
                        "\/wap\/a\/channel\/reconnect.php": 1,
                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                        "\/wap\/appreg.php": 1,
                        "\/wap\/birthday_help.php": 1,
                        "\/wap\/c.php": 1,
                        "\/wap\/confirmemail.php": 1,
                        "\/wap\/cr.php": 1,
                        "\/wap\/login.php": 1,
                        "\/wap\/r.php": 1,
                        "\/zero\/datapolicy": 1,
                        "\/a\/timezone.php": 1,
                        "\/a\/bz": 1,
                        "\/bz\/reliability": 1,
                        "\/r.php": 1,
                        "\/mr\/": 1,
                        "\/reg\/": 1,
                        "\/registration\/log\/": 1,
                        "\/terms\/": 1,
                        "\/f123\/": 1,
                        "\/expert\/": 1,
                        "\/experts\/": 1,
                        "\/terms\/index.php": 1,
                        "\/terms.php": 1,
                        "\/srr\/": 1,
                        "\/msite\/redirect\/": 1,
                        "\/fbs\/pixel\/": 1,
                        "\/contactpoint\/preconfirmation\/": 1,
                        "\/contactpoint\/cliff\/": 1,
                        "\/contactpoint\/confirm\/submit\/": 1,
                        "\/contactpoint\/confirmed\/": 1,
                        "\/contactpoint\/login\/": 1,
                        "\/preconfirmation\/contactpoint_change\/": 1,
                        "\/help\/contact\/": 1,
                        "\/survey\/": 1,
                        "\/upsell\/loyaltytopup\/accept\/": 1,
                        "\/settings\/": 1
                    }
                }, 1478],
                ["ZeroCategoryHeader", [], {}, 1127],
                ["MSession", [], {
                    "useAngora": false,
                    "logoutURL": "\/logout.php?h=Affw2eEy3jcGIPBX&t=1575725871",
                    "push_phase": "C3"
                }, 52]
            ]);
            new(require("ServerJS"))().handle({
                "require": [
                    ["MPrelude"],
                    ["BanzaiODS"],
                    ["VisualCompletionGating"],
                    ["BanzaiScuba"]
                ]
            });
        }, "ServerJS define", {
            "root": true
        })();
    </script>
    <link rel="preload" href="./Facebook - Log In or Sign Up_files/qgkhUdqe5-l.js.download" as="script">
    <link rel="preload" href="./Facebook - Log In or Sign Up_files/n_1BkOgKTPD.js.download" as="script">
    <link rel="preload" href="./Facebook - Log In or Sign Up_files/RDJfG0BJTQx.js.download" as="script">
    <script>
        var bigPipe = new(require("BigPipe"))({
            "forceFinish": true,
            "config": {
                "flush_pagelets_asap": true,
                "dispatch_pagelet_replayable_actions": false
            }
        });
    </script>
    <script>
        bigPipe.beforePageletArrive("first_response")
    </script>
    <script>
        require("TimeSlice").guard((function() {
            bigPipe.onPageletArrive({
                bootloadable: {
                    BanzaiODS: {
                        r: ["rhY/c", "mSBrt"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"]
                        },
                        be: 1
                    },
                    VisualCompletionGating: {
                        r: ["vgA39"]
                    },
                    BanzaiScuba: {
                        r: ["rhY/c", "mSBrt"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"]
                        }
                    },
                    GeneratedArtilleryUserTimingSink: {
                        r: ["uYbVb", "9Zaf3", "sGe+Z", "Hx+az"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"],
                            r: ["rhY/c", "mSBrt"]
                        },
                        be: 1
                    },
                    QPLInspector: {
                        r: ["VvVFw"],
                        be: 1
                    },
                    MPageControllerImpl: {
                        r: ["rhY/c", "h5fCD", "mSBrt", "vgA39", "sVEZ3"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba", "MPageFetcherImpl", "VisualCompletionGating"]
                        }
                    },
                    MPageFetcherImpl: {
                        r: ["rhY/c", "mSBrt", "h5fCD", "vgA39", "sVEZ3"],
                        rds: {
                            m: ["BanzaiODS", "VisualCompletionGating", "BanzaiScuba"]
                        }
                    },
                    Banzai: {
                        r: ["rhY/c", "mSBrt"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"]
                        },
                        be: 1
                    },
                    BanzaiStream: {
                        r: ["rhY/c", "mSBrt", "ZU1ro"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"]
                        },
                        be: 1
                    },
                    ResourceTimingBootloaderHelper: {
                        r: ["Iw+tw", "rhY/c"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"],
                            r: ["mSBrt"]
                        },
                        be: 1
                    },
                    TimeSliceHelper: {
                        r: ["oN7Oc"],
                        be: 1
                    },
                    SnappyCompressUtil: {
                        r: ["mSBrt"],
                        be: 1
                    },
                    PerfXSharedFields: {
                        r: ["vgA39"],
                        be: 1
                    },
                    TimeSliceInteractionsLiteTypedLogger: {
                        r: ["rhY/c", "h5fCD", "FHtgt", "mSBrt"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"]
                        },
                        be: 1
                    },
                    WebSpeedInteractionsTypedLogger: {
                        r: ["rhY/c", "h5fCD", "4LL/S", "mSBrt"],
                        rds: {
                            m: ["BanzaiODS", "BanzaiScuba"]
                        },
                        be: 1
                    }
                },
                resource_map: {
                    uYbVb: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/yncgZiC7BC6.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    "9Zaf3": {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/dQ_TzJobF0o.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    "sGe+Z": {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/JjU0WcjV29H.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    "Hx+az": {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/zO5MojAgN8I.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    VvVFw: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/8uSRVThd7c-.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    h5fCD: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3i_zH4/yE/l/en_US/qgkhUdqe5-l.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    BsoEr: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3izzX4/yI/l/en_US/n_1BkOgKTPD.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    MEigw: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3ih-D4/yZ/l/en_US/iqui8t90Ewf.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    O8x56: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3inQB4/y_/l/en_US/Yl1gyBI8wWg.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    HvugD: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/PHDuf9d2gWe.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    "Iw+tw": {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/RDJfG0BJTQx.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    ZU1ro: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/QKWIqWeZBgJ.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    oN7Oc: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/cgo-ptuHQ0P.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    FHtgt: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/3cdJiqLWPaS.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    },
                    "4LL/S": {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/p7Q552LVD4w.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    }
                },
                bxData: {
                    "875231": {
                        uri: "https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico"
                    }
                },
                gkxData: {
                    "996939": {
                        result: false,
                        hash: "AT7P0SmwsEJitK6i"
                    },
                    "996940": {
                        result: false,
                        hash: "AT5CQePkiW9mnnvX"
                    },
                    "676940": {
                        result: false,
                        hash: "AT64Gjevp2HhaIij"
                    },
                    "712819": {
                        result: false,
                        hash: "AT7_okTEBCxzvMPK"
                    },
                    "1132652": {
                        result: true,
                        hash: "AT6UNUa1O9uG_gtS"
                    },
                    "676781": {
                        result: false,
                        hash: "AT4d8oE5wxYUckxK"
                    },
                    "910664": {
                        result: false,
                        hash: "AT5-VEp0YR_NxjgQ"
                    },
                    "1070739": {
                        result: false,
                        hash: "AT4KagZAK_VN-Aap"
                    },
                    "820050": {
                        result: true,
                        hash: "AT7fuZbG9Lj8JCBT"
                    },
                    "985697": {
                        result: false,
                        hash: "AT6Kr4JnEva-zGqS"
                    },
                    "676812": {
                        result: false,
                        hash: "AT6dM4F0WL80Shek"
                    },
                    "676811": {
                        result: false,
                        hash: "AT4xloo_7kWkE99g"
                    },
                    "726410": {
                        result: true,
                        hash: "AT4noSima0Tk3OmD"
                    },
                    "708253": {
                        result: false,
                        hash: "AT4-omIvockIhDrh"
                    },
                    "692841": {
                        result: false,
                        hash: "AT7WSurJhXMmzKUI"
                    },
                    "1029033": {
                        result: false,
                        hash: "AT6G0OVCuO_uTvQP"
                    },
                    "1099893": {
                        result: false,
                        hash: "AT7PdcRvMnYC0PkS"
                    },
                    "862436": {
                        result: false,
                        hash: "AT4qkKXu4chja5TZ"
                    }
                },
                qexData: {
                    "833102": {
                        r: null
                    }
                },
                allResources: ["sVEZ3", "rhY/c", "h5fCD", "BsoEr", "MEigw", "vgA39", "piPs3", "O8x56", "mSBrt", "HvugD", "Iw+tw"],
                displayResources: ["sVEZ3", "rhY/c", "h5fCD", "BsoEr", "vgA39", "piPs3", "mSBrt", "Iw+tw"],
                id: "first_response",
                phase: 0,
                jsmods: {
                    elements: [
                        ["__elem_de5177dd_0_0", "u_0_0", 1],
                        ["__elem_921b58ef_0_0", "login_form", 1],
                        ["__elem_e24cb174_0_0", "m_login_password", 1],
                        ["__elem_7216e2ae_0_2", "u_0_1", 1],
                        ["__elem_e03291d5_0_1", "u_0_2", 1],
                        ["__elem_e03291d5_0_0", "u_0_3", 1],
                        ["__elem_7216e2ae_0_0", "u_0_4", 1],
                        ["__elem_7216e2ae_0_1", "u_0_5", 1],
                        ["__elem_e980dec4_0_0", "signup-button", 1],
                        ["__elem_8a020238_0_0", "forgot-password-link", 1],
                        ["__elem_49f6b607_0_0", "root", 1],
                        ["__elem_eed16c0a_0_0", "u_0_6", 1],
                        ["__elem_a588f507_0_0", "u_0_7", 1],
                        ["__elem_a588f507_0_1", "u_0_8", 1],
                        ["__elem_0cdc66ad_0_0", "u_0_a", 1],
                        ["__elem_0cdc66ad_0_1", "u_0_b", 1]
                    ],
                    require: [
                        ["MLoginController", "initAccountRecoveryFunnelLogging", ["__elem_8a020238_0_0"],
                            [{
                                __m: "__elem_8a020238_0_0"
                            }, "click_forget_password", "iqfrXZ6RpQdLyXcJDv4u6ZdN"]
                        ],
                        ["BrowserPrefillLogging", "initContactpointFieldLogging", [],
                            [{
                                contactpointFieldID: "m_login_email",
                                serverPrefill: ""
                            }]
                        ],
                        ["BrowserPrefillLogging", "initPasswordFieldLogging", [],
                            [{
                                passwordFieldID: "m_login_password"
                            }]
                        ],
                        ["MLoginView", "disableOnSubmit", ["__elem_921b58ef_0_0", "__elem_7216e2ae_0_0"],
                            [{
                                __m: "__elem_921b58ef_0_0"
                            }, {
                                __m: "__elem_7216e2ae_0_0"
                            }]
                        ],
                        ["MLoginController", "initRegButton", ["__elem_7216e2ae_0_1"],
                            [{
                                root: {
                                    __m: "__elem_7216e2ae_0_1"
                                },
                                regURI: "/reg-no-deeplink/?cid=103",
                                useRegToLogin: true
                            }]
                        ],
                        ["MLoginController", "initLoginForm", ["__elem_de5177dd_0_0"],
                            [{
                                root: {
                                    __m: "__elem_de5177dd_0_0"
                                },
                                ajaxURI: "/login/device-based/login/async/?refsrc=https%3A%2F%2Fm.facebook.com%2F&lwv=100",
                                rapidFeedbackUri: null,
                                clearOnDelete: false,
                                listenKeyDown: false,
                                isTwoStepsLogin: false,
                                isActionLoggingEnabled: true,
                                isCredsManagerEnabled: false,
                                onErrorRegURI: "/r.php",
                                shouldAutoLandOnStep2: false,
                                shouldPrefillJioHeaderForRegFromLogin: false,
                                shouldProcessUserConsentForTokenHeader: false,
                                shouldProcessUserConsentForHeader: false,
                                shouldShowSmartLockSelector: false,
                                shouldRunBotDetection: false,
                                clearPrefillMaskOnKeydown: false,
                                datrCookie: "iqfrXZ6RpQdLyXcJDv4u6ZdN",
                                pubKeyData: null
                            }]
                        ],
                        ["MTouchable"],
                        ["MPasswordPlainTextToggle", "init", ["__elem_e24cb174_0_0", "__elem_7216e2ae_0_2", "__elem_e03291d5_0_0", "__elem_e03291d5_0_1"],
                            [{
                                __m: "__elem_e24cb174_0_0"
                            }, {
                                __m: "__elem_7216e2ae_0_2"
                            }, {
                                __m: "__elem_e03291d5_0_0"
                            }, {
                                __m: "__elem_e03291d5_0_1"
                            }]
                        ],
                        ["ServiceWorkerLoginAndLogoutListener", "listen", [],
                            ["login_button_block", "login", "/sw?s=push", null]
                        ],
                        ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0"],
                            [{
                                __m: "__elem_e980dec4_0_0"
                            }]
                        ],
                        ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0"],
                            [
                                [{
                                    __m: "__elem_49f6b607_0_0"
                                }]
                            ]
                        ],
                        ["MScrollPositionSaver"],
                        ["MLogoutClearCache"],
                        ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0", "__elem_a588f507_0_0", "__elem_a588f507_0_1"],
                            [{
                                __m: "__elem_eed16c0a_0_0"
                            }, {
                                __m: "__elem_a588f507_0_0"
                            }, {
                                __m: "__elem_a588f507_0_1"
                            }]
                        ],
                        ["MPageError"],
                        ["MPageHeaderAccessibility"],
                        ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0"],
                            [{
                                __m: "__elem_0cdc66ad_0_0"
                            }]
                        ],
                        ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1"],
                            [{
                                __m: "__elem_0cdc66ad_0_1"
                            }]
                        ],
                        ["MLoadingIndicator", "init", [],
                            ["u_0_9"]
                        ],
                        ["LogHistoryListeners"],
                        ["ScriptPath", "set", [],
                            ["/wap/index.php", "0f4ef985", {
                                imp_id: "0v60nKKvdbcOTNQ1W",
                                ef_page: null
                            }]
                        ],
                        ["MCommentViewportTracking", "singleton", [],
                            [{
                                enabled: true,
                                debug_console: false,
                                debug_html: false,
                                idle_timeout: 5000,
                                min_duration_to_log: 100,
                                min_visible_size: 200
                            }]
                        ],
                        ["MLogging", "main", [],
                            [{
                                refid: 8
                            }]
                        ],
                        ["RemoteDevice", "init", [],
                            [{
                                performHardwareDetection: true,
                                hashId: "724ab021f869540ea70857ed5f0f845c"
                            }]
                        ],
                        ["Artillery"],
                        ["MLinkHack"],
                        ["MModalDialogInit"],
                        ["MVerifyCache", "main", [],
                            [{
                                viewer: 0
                            }]
                        ],
                        ["EventProfiler"],
                        ["MPageNavigationTracking", "init", [],
                            []
                        ],
                        ["ScriptPathLogger", "startLogging", [],
                            []
                        ],
                        ["MTimeSpentBitArrayLogger", "init", [],
                            ["m", false]
                        ],
                        ["MCoreDeferred"],
                        ["MPageControllerImpl"],
                        ["MPageFetcherImpl"]
                    ],
                    pre_display_requires: [
                        ["AddressBar", "setupLoadListener", [],
                            [], 2
                        ],
                        ["MobileBigPipeStratcomProxy", "init", [],
                            [], 2
                        ],
                        ["Stratcom", "init", [],
                            [], 2
                        ],
                        ["MViewport", "init", [],
                            [], 2
                        ],
                        ["MPageController", "init", [],
                            [], 2
                        ],
                        ["MResponseActionsProxy", "init", [],
                            [], 2
                        ],
                        ["onSyncTTI", "run", [],
                            [], 2
                        ],
                        ["MLiteInit", "init", [],
                            [], 2
                        ]
                    ],
                    define: [
                        ["cr:1183579", ["InlineFbtResultImpl"], {
                            __rc: ["InlineFbtResultImpl", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["cr:694370", ["requestIdleCallbackBlue"], {
                            __rc: ["requestIdleCallbackBlue", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["cr:682175", [], {
                            __rc: [null, "Aa1MPht6tPg-EHnnhfd0-QPbFlJji0b4DYTdOaEASfkLKhF1p4Q5Oa8wUVatS8bNgRxTkw"]
                        }, -1],
                        ["MLoadingIndicatorSigils", [], {
                            ANIMATE: "m-loading-indicator-animate",
                            ROOT: "m-loading-indicator-root"
                        }, 279],
                        ["KSConfig", [], {
                            killed: {
                                __set: ["POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "PREVENT_INFINITE_URL_REDIRECT", "POCKET_MONSTERS_UPDATE_NAME", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_MANAGER_SHOW_UI_HIDDEN_TASK_FOR_ASSET", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "RECRUITING_REQUISITION_VALIDATE_COMPANY_GROUPING_ON_LINK", "COMET_SAFARI_MEGA_LAYOUT_FIX_FOR_VIDEO_ATTACHMENTS", "COLLAB_GIZMO_DASHBOARD_UNIDASH_THEME_CONFIG"]
                            },
                            ko: {
                                __set: ["acrJTh9WGdp", "1oOE64fL4wO", "2dhqRnqXGLQ", "alHyDgpJdsZ", "7r6mSP7ofr2", "1ntjZ2zgf03", "3oh5Mw86USj", "8NAceEy9JZo", "5mNEXob0nTj", "4j36SVzvP3w", "8PlKuowafe8", "53gCxKq281G", "3yzzwBY7Npj", "4NbCsulUUI3", "4NSq3ZC4ScE", "1onzIv0jH6H", "5LSlJUj3BnT", "advqeReHsha", "6o5Hj5x2NCJ"]
                            }
                        }, 2580],
                        ["MWebStorageMonsterWhiteList", [], {
                            whitelist: ["^Banzai$", "^bz", "^banzai\\:last_storage_flush$", "^mutex", "^msys", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^[0-9]+:powereditor:", "^Bandicoot\\:", "^brands\\:console\\:config$", "^CacheStorageVersion$", "^consoleEnabled$", "^_video_$", "^vc_", "^_showMDevConsole$", "^_ctv_", "^ga_client_id$", "^qe_switcher_nub_selection$", "^_mswam_$", "^am_recently_used_filters\\:", "^ickt$", "^imp_seq_num$"]
                        }, 254],
                        ["MobileAppDetect", [], {
                            is_mobile_app: false,
                            is_ads_manager_app: false,
                            is_pages_manager: false,
                            is_facebook_for_android: false,
                            is_facebook_for_android_in_app_browser: false,
                            is_facebook_for_ios: false,
                            is_instagram: false,
                            is_messenger_for_android: false,
                            is_messenger_for_ios: false,
                            is_wilde: false,
                            is_kaios: false
                        }, 1109],
                        ["FbtLogger", [], {
                            logger: null
                        }, 288],
                        ["FbtResultGK", [], {
                            shouldReturnFbtResult: true,
                            inlineMode: "NO_INLINE"
                        }, 876],
                        ["IntlHoldoutGK", [], {
                            inIntlHoldout: false
                        }, 2827],
                        ["IntlNumberTypeConfig", [], {
                            impl: "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"
                        }, 3405],
                        ["IntlViewerContext", [], {
                            GENDER: 3
                        }, 772],
                        ["NumberFormatConfig", [], {
                            decimalSeparator: ".",
                            numberDelimiter: ",",
                            minDigitsForThousandsSeparator: 4,
                            standardDecimalPatternInfo: {
                                primaryGroupSize: 3,
                                secondaryGroupSize: 3
                            },
                            numberingSystemData: null
                        }, 54],
                        ["IntlPhonologicalRules", [], {
                            meta: {
                                "/_B/": "([.,!?\\s]|^)",
                                "/_E/": "([.,!?\\s]|$)"
                            },
                            patterns: {
                                "/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)/": "\u0001$1$2s\u0001$3",
                                "/_\u0001([^\u0001]*)\u0001/": "javascript"
                            }
                        }, 1496],
                        ["FWLoader", [], {}, 278],
                        ["ImmediateActiveSecondsConfig", [], {
                            sampling_rate: 0
                        }, 423],
                        ["FalcoJSLoggerSamplingPolicies", [], {
                            rates: {
                                accountquality_aqviewpanetab_augl: 1,
                                accountquality_aqviewpanetabended_augl: 1,
                                accountquality_coreappexperience_augl: 1,
                                accountquality_coreappexperienceended_augl: 1,
                                accountquality_coreinteractionbutton_augl: 1,
                                accountquality_coreinteractioncheckbox_augl: 1,
                                accountquality_coreinteractioncollapse_augl: 1,
                                accountquality_coreinteractionexpand_augl: 1,
                                accountquality_coreinteractionmouseover_augl: 1,
                                accountquality_coreinteractionmouseoverended_augl: 1,
                                accountquality_coreinteractionpanetab_augl: 1,
                                accountquality_coreuserinteraction_augl: 1,
                                accountquality_coreuserinteractionended_augl: 1,
                                admin_saw_hcp_ed_interstitial: 1,
                                adsadbuilder_amadbuilderoptinstarted_augl: 1,
                                adsadbuilder_amadbuilderoptoutstarted_augl: 1,
                                adsadbuilder_coreappexperience_augl: 1,
                                adsadbuilder_coreuserinteraction_augl: 1,
                                adscometflytrap_coreappexperience_augl: 1,
                                adscometflytrap_coreappexperienceended_augl: 1,
                                adscometflytrap_coreuserinteraction_augl: 1,
                                adscometflytrap_coreuserinteractionended_augl: 1,
                                adsflytrap_afsendfeedback_augl: 1,
                                adsflytrap_coreappexperience_augl: 1,
                                adsflytrap_coreappexperienceended_augl: 1,
                                adsflytrap_coreinteractionbutton_augl: 1,
                                adsflytrap_coreinteractiondropdown_augl: 1,
                                adsflytrap_coreinteractiondropdownended_augl: 1,
                                adsflytrap_coreinteractiontextinput_augl: 1,
                                adsflytrap_coreinteractiontextinputended_augl: 1,
                                adsflytrap_coreuserinteraction_augl: 1,
                                adsflytrap_coreuserinteractionended_augl: 1,
                                adsflytrap_coreviewmodal_augl: 1,
                                adsflytrap_coreviewmodalended_augl: 1,
                                adsmanager_amaccountoverview_augl: 1,
                                adsmanager_amaccountoverviewended_augl: 1,
                                adsmanager_amadbuilderimportflowmockupconfirmed_augl: 1,
                                adsmanager_amadbuilderimportflowmockupselected_augl: 1,
                                adsmanager_amadbuilderimportflowstarted_augl: 1,
                                adsmanager_amadobjectcreateflow_augl: 1,
                                adsmanager_amadobjectcreateflowended_augl: 1,
                                adsmanager_amadobjectduplicateflow_augl: 1,
                                adsmanager_amadobjectduplicateflowended_augl: 1,
                                adsmanager_amadobjecteditflow_augl: 1,
                                adsmanager_amadobjecteditflowended_augl: 1,
                                adsmanager_amadobjectexportflow_augl: 1,
                                adsmanager_amadobjectexportflowended_augl: 1,
                                adsmanager_amadobjectimportflow_augl: 1,
                                adsmanager_amadobjectimportflowended_augl: 1,
                                adsmanager_amadobjectreviewandpublishflow_augl: 1,
                                adsmanager_amadobjectreviewandpublishflowended_augl: 1,
                                adsmanager_amadobjectsetbuyingtype_augl: 1,
                                adsmanager_amadobjectsetobjective_augl: 1,
                                adsmanager_amadscopyerror_augl: 1,
                                adsmanager_amapierror_augl: 1,
                                adsmanager_amautonamingclicktosave_augl: 1,
                                adsmanager_amconvergencecontextualmenuclick_augl: 1,
                                adsmanager_amconvergenceexternalcreationdialogclick_augl: 1,
                                adsmanager_amconvergencefocusmode_augl: 1,
                                adsmanager_amconvergencefocusmodeended_augl: 1,
                                adsmanager_amconvergencefocusmodetoggleclick_augl: 1,
                                adsmanager_amconvergenceoptinoptout_augl: 1,
                                adsmanager_amconvergencepublishflow_augl: 1,
                                adsmanager_amconvergencepublishflowended_augl: 1,
                                adsmanager_amconvergencepublishpreviewdialogselection_augl: 1,
                                adsmanager_amcrash_augl: 1,
                                adsmanager_amcreateflow_augl: 1,
                                adsmanager_amcreateflowended_augl: 1,
                                adsmanager_amcreateflowfocusframework_augl: 1,
                                adsmanager_amcreateflowfocusframeworkclicktoedit_augl: 1,
                                adsmanager_amcreateflowfocusframeworkended_augl: 1,
                                adsmanager_amcreateflowmutableoption_augl: 1,
                                adsmanager_amcreateflowpage_augl: 1,
                                adsmanager_amcreateflowpageended_augl: 1,
                                adsmanager_amcriticalexception_augl: 1,
                                adsmanager_amdraftfragmentloaderror_augl: 1,
                                adsmanager_amdraftloaderror_augl: 1,
                                adsmanager_ameditflow_augl: 1,
                                adsmanager_ameditflowended_augl: 1,
                                adsmanager_amemojiclicktoedit_augl: 1,
                                adsmanager_amemojiselectedemoji_augl: 1,
                                adsmanager_amexception_augl: 1,
                                adsmanager_amfatalerror_augl: 1,
                                adsmanager_amhomeview_augl: 1,
                                adsmanager_amhomeviewended_augl: 1,
                                adsmanager_amimporterror_augl: 1,
                                adsmanager_aminit_augl: 1,
                                adsmanager_aminstantcheckoutdropdown_augl: 1,
                                adsmanager_aminstantcheckoutsection_augl: 1,
                                adsmanager_aminstantcheckoutsectionended_augl: 1,
                                adsmanager_amnamingtypeaheadselect_augl: 1,
                                adsmanager_ampublisherror_augl: 1,
                                adsmanager_amsmartbackgrounddialog_augl: 1,
                                adsmanager_amsmartbackgrounddialogclosed_augl: 1,
                                adsmanager_amsmartbackgrounderror_augl: 1,
                                adsmanager_amsmartbackgroundimagesave_augl: 1,
                                adsmanager_amtableadobject_augl: 1,
                                adsmanager_amtableadobjectended_augl: 1,
                                adsmanager_amvalidationerror_augl: 1,
                                adsmanager_coreappexperience_augl: 1,
                                adsmanager_coreappexperienceended_augl: 1,
                                adsmanager_coreinteractiontoggle_augl: 1,
                                adsmanager_coreuserinteraction_augl: 1,
                                adsmanager_coreuserinteractionended_augl: 1,
                                adswaittimespinners_awtspinners_augl: 1,
                                adswaittimespinners_coreappexperience_augl: 1,
                                adswaittimespinners_coreappexperienceended_augl: 1,
                                adswaittimespinners_coreuserinteraction_augl: 1,
                                adswaittimespinners_coreuserinteractionended_augl: 1,
                                al_dialog_shown: 1,
                                auglexplorer_augleupdatefilter_augl: 1,
                                auglexplorer_coreappexperience_augl: 1,
                                auglexplorer_coreappexperienceended_augl: 1,
                                auglexplorer_coreuserinteraction_augl: 1,
                                auglexplorer_coreuserinteractionended_augl: 1,
                                billing_interface_debug: 1,
                                billing_interface_error: 1,
                                billing_interface_event: 1,
                                bizapp_tool_outcome: 1,
                                business_inbox_bulk_admin_assignment_action_click: 1,
                                business_inbox_bulk_admin_assignment_dialog_submit: 1,
                                business_inbox_bulk_delete_action_click: 1,
                                business_inbox_bulk_delete_dialog_submit: 1,
                                business_inbox_bulk_label_action_click: 1,
                                business_inbox_bulk_label_dialog_submit: 1,
                                business_inbox_bulk_mark_as_unread_action_click: 1,
                                business_inbox_bulk_move_to_folder_action_click: 1,
                                business_inbox_bulk_reply_action_click: 1,
                                business_inbox_bulk_reply_dialog_submit: 1,
                                business_inbox_multi_admin_assignment_update: 1,
                                business_inbox_nux_impression: 1,
                                business_inbox_post_folder_update: 1,
                                business_inbox_suggested_label_click: 1,
                                business_inbox_suggested_label_impression: 1,
                                business_inbox_suggested_label_render_view: 1,
                                business_inbox_switch_folder_click: 1,
                                business_inbox_thread_checkbox_click: 1,
                                business_inbox_thread_checkbox_impression: 1,
                                business_inbox_thread_checkbox_update_value: 1,
                                business_inbox_thread_folder_update: 1,
                                businessmanager_bmassetinfoextraaction_augl: 1,
                                businessmanager_bmassetpermissionaccordianmenuinteraction_augl: 1,
                                businessmanager_bmassetpermissiondelete_augl: 1,
                                businessmanager_bmassetpermissiondeletecancel_augl: 1,
                                businessmanager_bmassetpermissiondeleteconfirm_augl: 1,
                                businessmanager_bmassetpermissionedit_augl: 1,
                                businessmanager_bmassettabaddasset_augl: 1,
                                businessmanager_bmassettabaddpeople_augl: 1,
                                businessmanager_bmassettabassignpartner_augl: 1,
                                businessmanager_bmchangetabinteraction_augl: 1,
                                businessmanager_bmlistrowimpression_augl: 1,
                                businessmanager_bmlistviewinteraction_augl: 1,
                                businessmanager_bmlistviewtoggle_augl: 1,
                                businessmanager_bmnavigationlevel_augl: 1,
                                businessmanager_bmnavigationlevelended_augl: 1,
                                businessmanager_bmopenassetintoolaction_augl: 1,
                                businessmanager_bmpaneload_augl: 1,
                                businessmanager_bmpaneloadended_augl: 1,
                                businessmanager_bmpaneopen_augl: 1,
                                businessmanager_bmpaneopenended_augl: 1,
                                businessmanager_bmserverexception_augl: 1,
                                businessmanager_bmusertabaddasset_augl: 1,
                                businessmanager_bmvalidationerror_augl: 1,
                                businessmanager_bmvettingpageinitialload_augl: 1,
                                businessmanager_bmvettingpageinitialloadended_augl: 1,
                                businessmanager_coreappexperience_augl: 1,
                                businessmanager_coreappexperienceended_augl: 1,
                                businessmanager_coreinteractionaccordianmenu_augl: 1,
                                businessmanager_coreinteractionbutton_augl: 1,
                                businessmanager_coreinteractioncheckbox_augl: 1,
                                businessmanager_coreinteractiondropdown_augl: 1,
                                businessmanager_coreinteractiondropdownended_augl: 1,
                                businessmanager_coreinteractionradiobutton_augl: 1,
                                businessmanager_coreinteractiontextinput_augl: 1,
                                businessmanager_coreinteractiontextinputended_augl: 1,
                                businessmanager_coreinteractiontoggle_augl: 1,
                                businessmanager_coreuserinteraction_augl: 1,
                                businessmanager_coreuserinteractionended_augl: 1,
                                businessmanager_coreviewmodal_augl: 1,
                                businessmanager_coreviewmodalended_augl: 1,
                                candidate_portal_give_feedback: 1,
                                cause_item_click: 1,
                                change_goal_amount: 1,
                                changed_cause: 1,
                                chatroom_attachment_chat_button_tapped: 1,
                                chatroom_join_request_cancelled: 1,
                                chatroom_join_request_submitted: 1,
                                cix_account_status_vpvd: 1,
                                cix_warning_screens: 1,
                                click_donate_monthly: 1,
                                click_donate_once: 1,
                                click_donation_history_item: 1,
                                click_like_button: 1,
                                click_open_edit_group_fundraiser_settings: 1,
                                click_other_amount_button: 1,
                                click_suggested_amount_button: 1,
                                click_unlike_button: 1,
                                cloud_gaming_session_event: 1,
                                comet_feed_story_menu_action: 10000,
                                comet_feed_vpvd_test: 1,
                                comet_group_mall_visit: 1,
                                comet_ineligibility_opt_out_event: 1,
                                comet_media_options_click: 10000,
                                comet_media_remove_tag: 10000,
                                comet_media_tag: 10000,
                                comet_media_vpvd: 1,
                                comet_news_feed_eof: 1,
                                comet_news_feed_eof_unmounted: 1,
                                comet_news_feed_loaded: 1,
                                comet_opt_in_upsell_interaction: 1,
                                comet_opt_out_survey: 1,
                                comet_opt_out_survey_feedback: 1,
                                comet_story_attachments: 1,
                                comet_topnav_item_click: 1,
                                comet_topnav_item_impression: 1,
                                comment_inline_seen: 1,
                                comment_inline_xout: 1,
                                comment_ordering_mode: 1,
                                commerce_feed_story_click: 1,
                                commerce_feed_story_impression: 1,
                                commerce_pdp_product_tag_click: 1,
                                commerce_see_more_from_shop_card_click: 1,
                                commerce_shop_landing: 1,
                                commerce_shop_product_details_imp: 1,
                                commerce_view_product_tag: 1,
                                commerce_view_product_tag_hscroll: 1,
                                commerce_view_product_tag_overlapped: 1,
                                commerce_view_product_tag_pill: 1,
                                commerce_view_product_tag_pill_dwelled: 1,
                                commerce_view_product_tagged_post: 1,
                                commerce_view_see_more_from_shop: 1,
                                commerce_view_shoppable_content_landing: 1,
                                community_resources_click_link_mobile: 1,
                                community_resources_share_link_mobile: 1,
                                consent_flow_interactions: 1,
                                content_manager_content_detail_view_cancel_flow: 1,
                                content_manager_content_detail_view_click: 1,
                                content_manager_content_detail_view_enter_flow: 1,
                                content_manager_content_detail_view_exit_flow: 1,
                                content_manager_content_detail_view_receive_response_failure: 1,
                                content_manager_content_detail_view_receive_response_success: 1,
                                content_manager_content_detail_view_send_request: 1,
                                content_manager_content_detailed_view_impression: 1,
                                content_manager_content_item_click: 1,
                                content_manager_content_item_impression: 1,
                                content_manager_tab_item_click: 1,
                                content_manager_tab_item_impression: 1,
                                content_manager_workspace_click: 1,
                                content_manager_workspace_enter_flow: 1,
                                content_manager_workspace_exit_flow: 1,
                                content_manager_workspace_impression: 1,
                                content_manager_workspace_receive_response_failure: 1,
                                content_manager_workspace_receive_response_success: 1,
                                content_manager_workspace_send_request: 1,
                                coworker_opt_out_flow: 1,
                                create_fundraiser_click: 1,
                                create_living_room_action_link_impression: 1,
                                deferred_feedback_experience: 1,
                                delete_media_attempted: 1,
                                donate_click: 1,
                                donation_impact_dismiss_prompt: 1,
                                e2e_deletion_requests: 1,
                                edit_fundraiser_click: 1,
                                edit_group_fundraiser_settings_begin: 1,
                                end_fundraiser_begin: 1,
                                external_metric_consumption_validation_event: 1,
                                external_share_tracking_event: 1,
                                fbt_impressions_batch: 1,
                                friends_center_opened: 1,
                                frtp_survey_response: 1,
                                fundraiser_add_organizers: 1,
                                fundraiser_chat_support_click: 1,
                                fundraiser_create_post_click: 1,
                                fundraiser_hub_category_click: 1,
                                fundraiser_more_button_click: 1,
                                fundraiser_payout_setup_click: 1,
                                fundraiser_payout_verification_click: 1,
                                fundraiser_see_all_click: 1,
                                fundraiser_summary_click: 1,
                                gaming_video_level_up_qp: 1,
                                goodwill_product_system_share_menu_open: 1,
                                griffin_tab_open: 1,
                                group_leaders_engagement: 1,
                                holy_diver_client_request: 1,
                                hub_activity_link_click: 1,
                                increase_goal_amount_equal: 1,
                                increase_goal_amount_input_change: 1,
                                increase_goal_amount_null: 1,
                                increase_goal_amount_screen_shown: 1,
                                increase_goal_amount_smaller: 1,
                                invite_click: 1,
                                kototoro_comment_create_attempted: 1,
                                kototoro_comment_created: 1,
                                kototoro_comment_delete_attempted: 1,
                                kototoro_comment_deleted: 1,
                                kototoro_comment_emoji_selected: 1,
                                kototoro_comment_exited: 1,
                                kototoro_comment_follow_upsell_action: 1,
                                kototoro_comment_follow_upsell_shown: 1,
                                kototoro_comment_launched: 1,
                                kototoro_comment_liked: 1,
                                kototoro_comment_mention_selected_user: 1,
                                kototoro_comment_mention_view_canceled: 1,
                                kototoro_comment_mention_view_shown: 1,
                                kototoro_comment_unliked: 1,
                                kttr_fb_stories_button_click: 1,
                                kttr_fb_stories_button_exposure: 1,
                                kttr_fb_stories_upsell: 1,
                                kttr_ig_feed_crosspost_composer: 1,
                                kttr_ig_feed_crosspost_sharesheet: 1,
                                kttr_ig_stories_crosspost_composer: 1,
                                kttr_ig_stories_crosspost_sharesheet: 1,
                                kttr_share_to_feed_error: 1,
                                kttr_share_to_story_error: 1,
                                kttr_shared_link: 1,
                                laminardevtools_coreappexperience_augl: 1,
                                laminardevtools_coreappexperienceended_augl: 1,
                                laminardevtools_coreuserinteraction_augl: 1,
                                laminardevtools_coreuserinteractionended_augl: 1,
                                laminardevtools_ldtactionselected_augl: 1,
                                laminardevtools_ldtdispatchinfoviewchange_augl: 1,
                                laminardevtools_ldtinit_augl: 1,
                                laminardevtools_ldtsearchfilter_augl: 1,
                                laminardevtools_ldttabchange_augl: 1,
                                lasso_composer_fb_stories_toggle: 1,
                                lasso_composer_fb_timeline_toggle: 1,
                                lasso_composer_fb_toggle: 1,
                                lasso_composer_ig_feed_toggle: 1,
                                lasso_composer_ig_stories_toggle: 1,
                                launch_message_seller_dialog: 1,
                                learning_click_component: 1,
                                lh_digest_logging: 1,
                                live_join_group_cta_click: 1,
                                live_trace_www_video_player: 1,
                                load_group_fundraiser_settings_row: 1,
                                locationmanager_coreappexperience_augl: 1,
                                locationmanager_coreappexperienceended_augl: 1,
                                locationmanager_coreinteractionaccordianmenu_augl: 1,
                                locationmanager_coreinteractionbutton_augl: 1,
                                locationmanager_coreinteractioncheckbox_augl: 1,
                                locationmanager_coreinteractiondropdown_augl: 1,
                                locationmanager_coreinteractiondropdownended_augl: 1,
                                locationmanager_coreinteractionradiobutton_augl: 1,
                                locationmanager_coreinteractiontextinput_augl: 1,
                                locationmanager_coreinteractiontextinputended_augl: 1,
                                locationmanager_coreinteractiontoggle_augl: 1,
                                locationmanager_coreuserinteraction_augl: 1,
                                locationmanager_coreuserinteractionended_augl: 1,
                                locationmanager_coreviewmodal_augl: 1,
                                locationmanager_coreviewmodalended_augl: 1,
                                log_comet_canvas_app_time_spent: 1,
                                log_messenger_frx_events_in_cix_screen: 1,
                                ls_business_welcome_page_composer_hided: 1,
                                ls_business_welcome_page_get_started_button_tapped: 1,
                                ls_business_welcome_page_start: 1,
                                ls_cta_click_client_handling_success: 1,
                                ls_cta_displayed_button_tapped: 1,
                                ls_did_tap_call_to_action: 1,
                                ls_messenger_integrity_block_facebook_confirmed: 1,
                                ls_messenger_integrity_block_facebook_failed: 1,
                                ls_messenger_integrity_block_facebook_succeeded: 1,
                                ls_messenger_integrity_block_facebook_tapped: 1,
                                ls_messenger_integrity_block_messages_confirmed: 1,
                                ls_messenger_integrity_block_messages_failed: 1,
                                ls_messenger_integrity_block_messages_succeeded: 1,
                                ls_messenger_integrity_block_messages_tapped: 1,
                                ls_messenger_integrity_block_view_enter: 1,
                                ls_messenger_integrity_ignore_confirmed: 1,
                                ls_messenger_integrity_ignore_started: 1,
                                ls_messenger_integrity_learn_more_tapped: 1,
                                ls_messenger_integrity_unblock_facebook_confirmed: 1,
                                ls_messenger_integrity_unblock_facebook_failed: 1,
                                ls_messenger_integrity_unblock_facebook_succeeded: 1,
                                ls_messenger_integrity_unblock_facebook_tapped: 1,
                                ls_messenger_integrity_unblock_messages_confirmed: 1,
                                ls_messenger_integrity_unblock_messages_failed: 1,
                                ls_messenger_integrity_unblock_messages_succeeded: 1,
                                ls_messenger_integrity_unblock_messages_tapped: 1,
                                ls_persistent_menu_client_handling_success: 1,
                                ls_persistent_menu_icon_tapped: 1,
                                ls_persistent_menu_is_set_up: 1,
                                managedlift_coreappexperience_augl: 1,
                                managedlift_coreappexperienceended_augl: 1,
                                managedlift_coreinteractionbutton_augl: 1,
                                managedlift_coreinteractioncheckbox_augl: 1,
                                managedlift_coreinteractioncollapse_augl: 1,
                                managedlift_coreinteractionexpand_augl: 1,
                                managedlift_coreinteractionmouseover_augl: 1,
                                managedlift_coreinteractionmouseoverended_augl: 1,
                                managedlift_coreinteractionpanetab_augl: 1,
                                managedlift_coreinteractionradiobutton_augl: 1,
                                managedlift_coreinteractionsearchbar_augl: 1,
                                managedlift_coreinteractionsearchbarended_augl: 1,
                                managedlift_coreuserinteraction_augl: 1,
                                managedlift_coreuserinteractionended_augl: 1,
                                managedlift_coreviewmodal_augl: 1,
                                managedlift_coreviewmodalended_augl: 1,
                                managedlift_mlapierror_augl: 1,
                                managedlift_mlerror_augl: 1,
                                managedlift_mlfieldset_augl: 1,
                                managedlift_mlsurveyrespond_augl: 1,
                                managedlift_mltypeaheadselect_augl: 1,
                                managedlift_mlvalidationerror_augl: 1,
                                marketplace_pdp_tracking_data_tracker: 1,
                                member_accepted_hcp_historical_content_dialog: 1,
                                member_accepted_hcp_message_request: 1,
                                member_clicked_hcp_message_profile_button: 1,
                                member_clicked_hcp_reply_in_messenger: 1,
                                member_continued_hcp_ed_interstitial: 1,
                                member_continued_hcp_messaging_warning: 1,
                                member_exited_hcp_ed_interstitial: 1,
                                member_exited_hcp_historical_content_dialog: 1,
                                member_rejected_hcp_message_request: 1,
                                member_saw_hcp_accepted_message: 1,
                                member_saw_hcp_ed_interstitial: 1,
                                member_saw_hcp_historical_content_dialog: 1,
                                member_saw_hcp_message_request: 1,
                                member_saw_hcp_message_request_composer: 1,
                                member_saw_hcp_messaging_warning: 1,
                                member_sent_hcp_message_request: 1,
                                member_typed_hcp_message_request_composer: 1,
                                mentorship: 1,
                                mentorship_cohort: 1,
                                mentorship_user: 1,
                                messenger_ads_link_click: 1,
                                messenger_ads_link_click_cta: 1,
                                messenger_ads_message_seen_inbox: 1,
                                messenger_ads_message_seen_thread: 1,
                                misinfo_frontend: 1,
                                mk_client_event: 1,
                                news_digest_content_impression_event: 1,
                                news_digest_outbound_click_event: 1,
                                news_digest_primary_click_event: 1,
                                news_digest_secondary_click_event: 1,
                                news_digest_unit_impression_event: 1,
                                notif_list_bottom_collision: 10000,
                                open_cause_beneficiary_selector: 1,
                                open_friend_beneficiary_selector_click: 1,
                                open_seen_summary: 1,
                                pages_composer_composer_cancel_flow: 1,
                                pages_composer_composer_enter_flow: 1,
                                pages_composer_composer_focus_acquired: 1,
                                pages_composer_composer_focus_lost: 1,
                                pages_composer_composer_impression: 1,
                                pages_composer_composer_submit_flow: 1,
                                pages_composer_composer_submit_flow_failure: 1,
                                pages_composer_composer_submit_flow_success: 1,
                                pages_composer_consolidated_entry_click: 1,
                                pages_composer_draft_post_cancel_flow: 1,
                                pages_composer_draft_post_edit_enter_flow: 1,
                                pages_composer_draft_post_edit_submit_flow: 1,
                                pages_composer_draft_post_enter_flow: 1,
                                pages_composer_draft_post_submit_flow: 1,
                                pages_composer_draft_reminder_card_impression: 1,
                                pages_composer_draft_reminder_unit_impression: 1,
                                pages_composer_footer_setting_button_click: 1,
                                pages_composer_media_attachment_button_click: 1,
                                pages_composer_media_attachment_button_impression: 1,
                                pages_composer_offer_composer_cancel_flow: 1,
                                pages_composer_offer_composer_enter_flow: 1,
                                pages_composer_offer_composer_photo_uploader_submit_flow: 1,
                                pages_composer_offer_composer_photo_uploader_submit_flow_failure: 1,
                                pages_composer_offer_composer_photo_uploader_submit_flow_success: 1,
                                pages_composer_offer_composer_submit_flow: 1,
                                pages_composer_offer_composer_submit_flow_failure: 1,
                                pages_composer_offer_composer_submit_flow_success: 1,
                                pages_composer_offer_composer_update_value: 1,
                                pages_composer_preview_button_click: 1,
                                pages_composer_schedule_post_cancel_flow: 1,
                                pages_composer_schedule_post_enter_flow: 1,
                                pages_composer_schedule_post_submit_flow: 1,
                                pages_inbox_impression: 1,
                                pages_launchpoint_pages_you_manage_click: 1,
                                pages_launchpoint_view_message_click: 1,
                                pages_launchpoint_view_notification_click: 1,
                                pages_message_thread_impression: 1,
                                pages_page_action_click: 1,
                                pages_page_action_impression: 1,
                                pages_page_address_click: 1,
                                pages_page_card_impression: 1,
                                pages_page_card_see_all_click: 1,
                                pages_page_cover_click: 1,
                                pages_page_cover_impression: 1,
                                pages_page_email_click: 1,
                                pages_page_get_directions_click: 1,
                                pages_page_like_chaining_unit_impression: 1,
                                pages_page_map_click: 1,
                                pages_page_message_click: 1,
                                pages_page_notification_menu_impression: 1,
                                pages_page_photo_album_click: 1,
                                pages_page_photo_click: 1,
                                pages_page_settings_impression: 1,
                                pages_page_surface_impression: 1,
                                pages_page_video_click: 1,
                                pages_page_website_click: 1,
                                pages_permalink_impression: 1,
                                partner_home_lookup_asset: 1,
                                partner_home_view_partner: 1,
                                partner_home_work_chat_clicked: 1,
                                people_you_may_follow: 1,
                                perf: 1,
                                pii_action_flow: 1,
                                political_ads_infosheet: 1,
                                post_debugger_usage: 1,
                                privacy_checkup_event: 1,
                                qp_action: 1,
                                qp_impression: 1,
                                regular_pymk_add: 1,
                                regular_pymk_imp: 1,
                                regular_pymk_profile: 1,
                                regular_pymk_xout: 1,
                                report_fundraiser_click: 1,
                                save_click: 1,
                                save_item_impression: 1,
                                save_surface_impression: 1,
                                saved_dashboard_imp: 1,
                                saved_dashboard_list_landing_imp: 1,
                                saved_see_all_lists_view_imp: 1,
                                sc_audio_messages_event: 1,
                                search_result_page_logging_inline_action: 1,
                                search_result_page_logging_item_clicked: 1,
                                search_result_page_logging_results_loaded: 1,
                                search_result_page_logging_viewport_view: 1,
                                search_results_logging_module_unit_data: 1,
                                search_results_logging_result_unit_data: 1,
                                search_typeahead_logging_session: 1,
                                sextortion_victim_support_option_clicked: 1,
                                share_click: 1,
                                share_dialog_unified_composer: 1,
                                share_qr_code_click: 1,
                                smart_compose_candidates_generated: 1,
                                smart_compose_candidates_queried: 1,
                                smart_compose_matching_suggestion: 1,
                                smart_compose_suggestion_clicked: 1,
                                smart_compose_suggestion_displayed: 1,
                                starter_template_answer_change: 1,
                                starter_template_begin_button_click: 1,
                                starter_template_cancel_button_click: 1,
                                starter_template_display_modal: 1,
                                starter_template_done_click: 1,
                                starter_template_next_click: 1,
                                starter_template_skip_click: 1,
                                streaming_sdk_event: 1,
                                streaming_sdk_metadata: 1,
                                streaming_sdk_session_summary: 1,
                                tap_add_to_pages_story: 1,
                                tap_creator_item: 1,
                                tap_nonprofit_item: 1,
                                tap_select_page: 1,
                                toggle_group_fundraiser_creation_permissions: 1,
                                toggle_group_fundraiser_feature_setting: 1,
                                ufi_share_menu_copy_link: 1,
                                unidash_bladerunner_events: 1,
                                vehicle_entity_page_user_action_event: 1,
                                verse: 1,
                                video_action_source_event: 1,
                                video_search_relevancy_feedback: 1,
                                view_bookmark_hub_component: 1,
                                view_fundraiser_click: 1,
                                view_fundraiser_page_component: 1,
                                view_fundraiser_payment_settings_click: 1,
                                view_nonprofit_click: 1,
                                view_payout_overview_click: 1,
                                vod_pnc_messenger_cta_click: 1,
                                vod_pnc_people_sheet_impression: 1,
                                vod_pnc_people_sheet_thumbnail_impression: 1,
                                vod_pnc_see_all_reactions_click: 1,
                                volunteering_click_unit: 1,
                                volunteering_view_unit: 1,
                                voter_registration_attachment_tap_change_state: 1,
                                voter_registration_post_impression: 1,
                                voter_registration_post_tap_register: 1,
                                voter_registration_qp_tap_edit_location: 1,
                                voter_registration_state_selector_tap_state: 1,
                                wayfinder_mapbox_data_load: 1,
                                weather_bookmark_forecast_scrolled: 1,
                                weather_bookmark_impression: 1,
                                weather_bookmark_scroll_forecast: 1,
                                weather_bookmark_settings_tapped: 1,
                                weather_bookmark_tap_city_tab: 1,
                                weather_bookmark_tap_future_day: 1,
                                weather_bookmark_tap_hourly_forecast: 1,
                                weather_bookmark_tap_nowcast: 1,
                                weather_daily_notifications_mutation_error: 1,
                                weather_daily_notifications_turned_off: 1,
                                weather_daily_notifications_turned_on: 1,
                                weather_live_alerts_mutation_error: 1,
                                weather_live_alerts_turned_off: 1,
                                weather_live_alerts_turned_on: 1,
                                weather_settings_add_city: 1,
                                weather_settings_daily_notification_use_current_location: 1,
                                weather_settings_delete_city: 1,
                                weather_settings_error_state_dismissed: 1,
                                weather_settings_error_state_fixed: 1,
                                weather_settings_impression: 1,
                                weather_settings_notification_location_tapped: 1,
                                weather_settings_tap_city_row: 1,
                                weather_settings_temperature_unit_changed: 1,
                                webauthn_authenticator_login_failure: 1,
                                webauthn_authenticator_login_success: 1,
                                webauthn_authenticator_register_failure: 1,
                                webauthn_authenticator_register_success: 1,
                                work_shift_cover_detail_screen_message_event: 1,
                                work_shift_cover_feed_attachment_click_to_detail_event: 1,
                                work_shift_cover_feed_attachment_message_event: 1,
                                work_thanks_mobile_ui_confirm_button_clicked: 1,
                                work_thanks_mobile_ui_dialog_opened: 1,
                                attempt_to_send_reply: 1,
                                bi_mlex_ad_history_click: 1,
                                bi_mlex_ad_history_impression: 1,
                                bi_mlex_feedback_survey_evolution_response: 1,
                                camera_roll_cancelled: 1,
                                camera_roll_finished: 1,
                                camera_roll_folder_in_dropdown_clicked: 1,
                                camera_roll_header_camera_clicked: 1,
                                camera_roll_header_cancel_button_clicked: 1,
                                camera_roll_header_folder_clicked: 1,
                                camera_roll_header_next_button_clicked: 1,
                                camera_roll_magnifying_glass_button_clicked: 1,
                                camera_roll_media_item_clicked: 1,
                                camera_roll_opened: 1,
                                close_story: 1,
                                composer_cancel: 1,
                                composer_entry: 1,
                                composer_focus_acquired: 1,
                                composer_focus_lost: 1,
                                composer_init: 1,
                                composer_post: 1,
                                composer_post_cancel: 1,
                                composer_post_failure: 1,
                                composer_post_mutation_start: 1,
                                composer_post_server_content_rendered: 1,
                                composer_post_success: 1,
                                composer_publish_flow: 1,
                                crisis_click_unit: 1,
                                crisis_tool_view_page: 1,
                                crisis_view_unit: 1,
                                feed_friend_request_confirm: 1,
                                feed_friend_request_delete: 1,
                                feed_friend_request_imp: 1,
                                feed_friend_request_profile: 1,
                                living_room: 1,
                                marketplace_click: 1,
                                marketplace_feed_load: 1,
                                marketplace_impression: 1,
                                marketplace_surface_enter: 1,
                                marketplace_surface_exit: 1,
                                open_media: 1,
                                open_story: 1,
                                pymk_add: 1,
                                pymk_imp: 1,
                                pymk_profile: 1,
                                pymk_xout: 1,
                                request_click: 1,
                                request_seen: 1,
                                saved_collection_ego_item_image_clicked: 1,
                                send_story_post_failed_notification: 1,
                                stories_interactive_feedback: 1,
                                story_card_impression: 1,
                                story_card_timespent: 1,
                                story_interactive_item_click: 1,
                                story_interactive_item_rendering: 1,
                                story_navigation: 1,
                                story_profile_impression: 1,
                                why_covered_ccs_link_followed: 1,
                                why_covered_ccs_snippet_viewed: 1,
                                why_covered_error_generating_cms: 1,
                                why_covered_how_snippet_viewed: 1
                            }
                        }, 4308],
                        ["QuickLogConfig", [], {
                            qpl_events: {
                                "393276": {
                                    sampleRate: 50
                                },
                                "655575": {
                                    sampleRate: 1
                                },
                                "655576": {
                                    sampleRate: 5000
                                },
                                "655584": {
                                    sampleRate: 1
                                },
                                "2097243": {
                                    sampleRate: 250
                                },
                                "2097246": {
                                    sampleRate: 1
                                },
                                "3473463": {
                                    sampleRate: 1
                                },
                                "3473464": {
                                    sampleRate: 1
                                },
                                "3473465": {
                                    sampleRate: 1
                                },
                                "3473471": {
                                    sampleRate: 10000
                                },
                                "3735589": {
                                    sampleRate: 100
                                },
                                "3735590": {
                                    sampleRate: 1000
                                },
                                "3735591": {
                                    sampleRate: 100
                                },
                                "3735592": {
                                    sampleRate: 1000
                                },
                                "3735593": {
                                    sampleRate: 1000
                                },
                                "3735594": {
                                    sampleRate: 1000
                                },
                                "3735595": {
                                    sampleRate: 100
                                },
                                "3735596": {
                                    sampleRate: 1000
                                },
                                "3735597": {
                                    sampleRate: 1000
                                },
                                "3735598": {
                                    sampleRate: 100
                                },
                                "3735599": {
                                    sampleRate: 1000
                                },
                                "3735600": {
                                    sampleRate: 100
                                },
                                "3735601": {
                                    sampleRate: 100
                                },
                                "3735602": {
                                    sampleRate: 10000
                                },
                                "3735603": {
                                    sampleRate: 10000
                                },
                                "3735604": {
                                    sampleRate: 100
                                },
                                "3735605": {
                                    sampleRate: 100
                                },
                                "3735606": {
                                    sampleRate: 1
                                },
                                "3735608": {
                                    sampleRate: 250
                                },
                                "3735609": {
                                    sampleRate: 250
                                },
                                "3735610": {
                                    sampleRate: 250
                                },
                                "3735611": {
                                    sampleRate: 250
                                },
                                "3735612": {
                                    sampleRate: 250
                                },
                                "3735613": {
                                    sampleRate: 250
                                },
                                "3735614": {
                                    sampleRate: 250
                                },
                                "3735615": {
                                    sampleRate: 250
                                },
                                "3735616": {
                                    sampleRate: 250
                                },
                                "3735617": {
                                    sampleRate: 250
                                },
                                "7733271": {
                                    sampleRate: 1
                                },
                                "7995396": {
                                    sampleRate: 100
                                },
                                "7995398": {
                                    sampleRate: 100
                                },
                                "7995399": {
                                    sampleRate: 100
                                },
                                "7995400": {
                                    sampleRate: 1
                                },
                                "7995401": {
                                    sampleRate: 1
                                },
                                "7995402": {
                                    sampleRate: 1
                                },
                                "7995403": {
                                    sampleRate: 100
                                },
                                "7995404": {
                                    sampleRate: 100
                                },
                                "7995408": {
                                    sampleRate: 100
                                },
                                "7995409": {
                                    sampleRate: 100
                                },
                                "7995411": {
                                    sampleRate: 100
                                },
                                "11075606": {
                                    sampleRate: 100
                                },
                                "11075649": {
                                    sampleRate: 1
                                },
                                "11075654": {
                                    sampleRate: 1
                                },
                                "11075666": {
                                    sampleRate: 100
                                },
                                "11075668": {
                                    sampleRate: 1
                                },
                                "11075669": {
                                    sampleRate: 1
                                },
                                "11075674": {
                                    sampleRate: 1
                                },
                                "12451850": {
                                    sampleRate: 4
                                },
                                "12451853": {
                                    sampleRate: 10000
                                },
                                "12451854": {
                                    sampleRate: 1
                                },
                                "12451859": {
                                    sampleRate: 1
                                },
                                "13238313": {
                                    sampleRate: 100
                                },
                                "13238314": {
                                    sampleRate: 100
                                },
                                "13238353": {
                                    sampleRate: 100
                                },
                                "13238354": {
                                    sampleRate: 100
                                },
                                "13238355": {
                                    sampleRate: 100
                                },
                                "13238356": {
                                    sampleRate: 100
                                },
                                "13238357": {
                                    sampleRate: 100
                                },
                                "13238392": {
                                    sampleRate: 100
                                },
                                "14549005": {
                                    sampleRate: 10000
                                },
                                "17825794": {
                                    sampleRate: 250
                                },
                                "19202053": {
                                    sampleRate: 100
                                },
                                "19202054": {
                                    sampleRate: 1
                                },
                                "19202055": {
                                    sampleRate: 10
                                },
                                "19202056": {
                                    sampleRate: 10
                                },
                                "19202071": {
                                    sampleRate: 10
                                },
                                "19202072": {
                                    sampleRate: 10
                                },
                                "19202075": {
                                    sampleRate: 1
                                },
                                "19202077": {
                                    sampleRate: 100
                                },
                                "19202078": {
                                    sampleRate: 10
                                },
                                "19202079": {
                                    sampleRate: 1
                                },
                                "19202080": {
                                    sampleRate: 100
                                },
                                "19202081": {
                                    sampleRate: 100
                                },
                                "22347782": {
                                    sampleRate: 100
                                },
                                "23265284": {
                                    sampleRate: 1
                                },
                                "23265285": {
                                    sampleRate: 1
                                },
                                "23265286": {
                                    sampleRate: 1
                                },
                                "23855105": {
                                    sampleRate: 1
                                },
                                "23855106": {
                                    sampleRate: 1
                                },
                                "23855107": {
                                    sampleRate: 1
                                },
                                "23855108": {
                                    sampleRate: 1
                                },
                                "23855109": {
                                    sampleRate: 1
                                },
                                "23855113": {
                                    sampleRate: 1
                                },
                                "25296897": {
                                    sampleRate: 1
                                },
                                "25296900": {
                                    sampleRate: 10000
                                },
                                "25296901": {
                                    sampleRate: 1
                                },
                                "25296902": {
                                    sampleRate: 1
                                },
                                "25296903": {
                                    sampleRate: 10000
                                },
                                "25296904": {
                                    sampleRate: 10000
                                },
                                "25296905": {
                                    sampleRate: 10000
                                },
                                "25296906": {
                                    sampleRate: 10000
                                },
                                "25952266": {
                                    sampleRate: 1
                                },
                                "26869761": {
                                    sampleRate: 1
                                },
                                "26869762": {
                                    sampleRate: 1
                                },
                                "26869763": {
                                    sampleRate: 1
                                },
                                "26869764": {
                                    sampleRate: 1
                                },
                                "26869765": {
                                    sampleRate: 1
                                },
                                "26869766": {
                                    sampleRate: 1
                                },
                                "27459585": {
                                    sampleRate: 10000
                                },
                                "27459588": {
                                    sampleRate: 5000
                                },
                                "27459589": {
                                    sampleRate: 1
                                },
                                "27459590": {
                                    sampleRate: 10
                                },
                                "27459591": {
                                    sampleRate: 1
                                },
                                "27787270": {
                                    sampleRate: 1
                                },
                                "27983873": {
                                    sampleRate: 1
                                },
                                "27983874": {
                                    sampleRate: 1
                                },
                                "27983875": {
                                    sampleRate: 1
                                },
                                "27983876": {
                                    sampleRate: 1
                                },
                                "27983877": {
                                    sampleRate: 1
                                },
                                "29818881": {
                                    sampleRate: 1
                                },
                                "29818882": {
                                    sampleRate: 1
                                },
                                "29818883": {
                                    sampleRate: 1
                                },
                                "29818884": {
                                    sampleRate: 1
                                },
                                "29884423": {
                                    sampleRate: 10
                                },
                                "29949953": {
                                    sampleRate: 1
                                },
                                "29949954": {
                                    sampleRate: 1
                                },
                                "29949955": {
                                    sampleRate: 1
                                },
                                "30408705": {
                                    sampleRate: 1
                                },
                                "30408706": {
                                    sampleRate: 1
                                },
                                "30408707": {
                                    sampleRate: 1
                                },
                                "30408708": {
                                    sampleRate: 1
                                },
                                "30408709": {
                                    sampleRate: 1
                                },
                                "30408710": {
                                    sampleRate: 1
                                },
                                "30408711": {
                                    sampleRate: 1
                                },
                                "30408712": {
                                    sampleRate: 1
                                },
                                "30605313": {
                                    sampleRate: 1
                                },
                                "30605314": {
                                    sampleRate: 1
                                },
                                "30605315": {
                                    sampleRate: 1
                                },
                                "30605316": {
                                    sampleRate: 1
                                },
                                "30605317": {
                                    sampleRate: 1
                                },
                                "30605319": {
                                    sampleRate: 1
                                },
                                "30605320": {
                                    sampleRate: 1
                                },
                                "30605321": {
                                    sampleRate: 1
                                },
                                "30605322": {
                                    sampleRate: 1
                                },
                                "30605323": {
                                    sampleRate: 1
                                },
                                "30605324": {
                                    sampleRate: 1
                                },
                                "30605325": {
                                    sampleRate: 1
                                },
                                "30605326": {
                                    sampleRate: 1
                                },
                                "30605328": {
                                    sampleRate: 1
                                },
                                "30605329": {
                                    sampleRate: 1
                                },
                                "30605330": {
                                    sampleRate: 1
                                },
                                "30605331": {
                                    sampleRate: 1
                                },
                                "30605332": {
                                    sampleRate: 1
                                },
                                "30605333": {
                                    sampleRate: 1
                                },
                                "30605334": {
                                    sampleRate: 1
                                },
                                "30605335": {
                                    sampleRate: 1
                                },
                                "30605336": {
                                    sampleRate: 1
                                },
                                "30605337": {
                                    sampleRate: 1
                                },
                                "30605338": {
                                    sampleRate: 1
                                },
                                "30605339": {
                                    sampleRate: 1
                                },
                                "30605340": {
                                    sampleRate: 1
                                },
                                "30605341": {
                                    sampleRate: 1
                                },
                                "30605342": {
                                    sampleRate: 1
                                },
                                "30605343": {
                                    sampleRate: 1
                                },
                                "30605344": {
                                    sampleRate: 1
                                },
                                "30605345": {
                                    sampleRate: 1
                                },
                                "30605346": {
                                    sampleRate: 1
                                },
                                "30605347": {
                                    sampleRate: 1
                                },
                                "30605348": {
                                    sampleRate: 1
                                },
                                "30605349": {
                                    sampleRate: 1
                                },
                                "30605350": {
                                    sampleRate: 1
                                },
                                "30605351": {
                                    sampleRate: 1
                                },
                                "30605352": {
                                    sampleRate: 1
                                },
                                "30605353": {
                                    sampleRate: 1
                                },
                                "30605354": {
                                    sampleRate: 1
                                },
                                "30605355": {
                                    sampleRate: 1
                                },
                                "30605356": {
                                    sampleRate: 1
                                },
                                "30605357": {
                                    sampleRate: 1
                                },
                                "30605358": {
                                    sampleRate: 1
                                },
                                "30605360": {
                                    sampleRate: 1
                                },
                                "30605361": {
                                    sampleRate: 1
                                },
                                "30605362": {
                                    sampleRate: 1
                                },
                                "30605363": {
                                    sampleRate: 1
                                },
                                "30605364": {
                                    sampleRate: 1
                                },
                                "30605365": {
                                    sampleRate: 1
                                },
                                "30605366": {
                                    sampleRate: 1
                                },
                                "30605367": {
                                    sampleRate: 1
                                },
                                "30605368": {
                                    sampleRate: 1
                                },
                                "30605369": {
                                    sampleRate: 1
                                },
                                "30605370": {
                                    sampleRate: 1
                                },
                                "30605371": {
                                    sampleRate: 1
                                },
                                "30605373": {
                                    sampleRate: 1
                                },
                                "30605374": {
                                    sampleRate: 1
                                },
                                "30605375": {
                                    sampleRate: 1
                                },
                                "30605376": {
                                    sampleRate: 1
                                },
                                "30605377": {
                                    sampleRate: 1
                                },
                                "30605378": {
                                    sampleRate: 1
                                },
                                "30605379": {
                                    sampleRate: 1
                                },
                                "30605380": {
                                    sampleRate: 1
                                },
                                "30605381": {
                                    sampleRate: 1
                                },
                                "30605382": {
                                    sampleRate: 1
                                },
                                "30605383": {
                                    sampleRate: 1
                                },
                                "30605384": {
                                    sampleRate: 1
                                },
                                "30605385": {
                                    sampleRate: 1
                                },
                                "30605386": {
                                    sampleRate: 1
                                },
                                "30605387": {
                                    sampleRate: 1
                                },
                                "32374785": {
                                    sampleRate: 10000
                                },
                                "32702465": {
                                    sampleRate: 1
                                },
                                "33619969": {
                                    sampleRate: 1
                                },
                                "33751042": {
                                    sampleRate: 1
                                },
                                "33751043": {
                                    sampleRate: 1
                                },
                                "33751044": {
                                    sampleRate: 1
                                },
                                "33751045": {
                                    sampleRate: 1
                                },
                                "33751046": {
                                    sampleRate: 1
                                },
                                "33751047": {
                                    sampleRate: 1
                                },
                                "33751048": {
                                    sampleRate: 1
                                },
                                "33751049": {
                                    sampleRate: 1
                                },
                                "35586050": {
                                    sampleRate: 1000
                                },
                                "35586051": {
                                    sampleRate: 10
                                },
                                "35586052": {
                                    sampleRate: 1000
                                },
                                "35586053": {
                                    sampleRate: 1000
                                },
                                "35651585": {
                                    sampleRate: 1
                                },
                                "35651586": {
                                    sampleRate: 1
                                },
                                "35651587": {
                                    sampleRate: 1
                                },
                                "35651588": {
                                    sampleRate: 1
                                },
                                "35651589": {
                                    sampleRate: 1
                                },
                                "35651590": {
                                    sampleRate: 1
                                },
                                "35651591": {
                                    sampleRate: 1
                                },
                                "35651592": {
                                    sampleRate: 1
                                },
                                "35651593": {
                                    sampleRate: 1
                                },
                                "35651594": {
                                    sampleRate: 1
                                },
                                "35651595": {
                                    sampleRate: 1
                                },
                                "35651596": {
                                    sampleRate: 1
                                },
                                "35651597": {
                                    sampleRate: 1
                                },
                                "35651598": {
                                    sampleRate: 1
                                },
                                "35651599": {
                                    sampleRate: 1
                                },
                                "35651600": {
                                    sampleRate: 1
                                },
                                "35651601": {
                                    sampleRate: 1
                                },
                                "36110337": {
                                    sampleRate: 1
                                },
                                "36110338": {
                                    sampleRate: 1
                                },
                                "36110339": {
                                    sampleRate: 1
                                },
                                "36241413": {
                                    sampleRate: 1
                                },
                                "36241422": {
                                    sampleRate: 1
                                },
                                "36241423": {
                                    sampleRate: 1
                                },
                                "36241424": {
                                    sampleRate: 1
                                },
                                "36306945": {
                                    sampleRate: 1
                                },
                                "36306946": {
                                    sampleRate: 1
                                },
                                "36306948": {
                                    sampleRate: 1
                                },
                                "36306951": {
                                    sampleRate: 1000
                                },
                                "36306952": {
                                    sampleRate: 1
                                },
                                "36306953": {
                                    sampleRate: 1
                                },
                                "37093377": {
                                    sampleRate: 10000
                                },
                                "37158913": {
                                    sampleRate: 1
                                },
                                "37158914": {
                                    sampleRate: 1
                                },
                                "37158915": {
                                    sampleRate: 1
                                },
                                "37158916": {
                                    sampleRate: 1
                                },
                                "37224449": {
                                    sampleRate: 10000
                                },
                                "37224450": {
                                    sampleRate: 10000
                                },
                                "37224451": {
                                    sampleRate: 10000
                                },
                                "37224452": {
                                    sampleRate: 10000
                                },
                                "37224453": {
                                    sampleRate: 10000
                                },
                                "37224454": {
                                    sampleRate: 10000
                                },
                                "37224455": {
                                    sampleRate: 10000
                                },
                                "37224456": {
                                    sampleRate: 10000
                                },
                                "37224457": {
                                    sampleRate: 10000
                                },
                                "37289985": {
                                    sampleRate: 1
                                },
                                "37289986": {
                                    sampleRate: 1
                                },
                                "37289987": {
                                    sampleRate: 1
                                },
                                "37289988": {
                                    sampleRate: 1
                                },
                                "37289989": {
                                    sampleRate: 1
                                },
                                "37289990": {
                                    sampleRate: 1
                                },
                                "37289991": {
                                    sampleRate: 1
                                },
                                "37289992": {
                                    sampleRate: 1
                                },
                                "37814273": {
                                    sampleRate: 1
                                },
                                "37814274": {
                                    sampleRate: 1
                                },
                                "37814275": {
                                    sampleRate: 1
                                },
                                "38338561": {
                                    sampleRate: 1
                                },
                                "38338562": {
                                    sampleRate: 1
                                },
                                "38338563": {
                                    sampleRate: 1
                                },
                                "38338564": {
                                    sampleRate: 1
                                },
                                "38928385": {
                                    sampleRate: 1
                                },
                                "39190529": {
                                    sampleRate: 10000
                                },
                                "39976961": {
                                    sampleRate: 1
                                },
                                "39976962": {
                                    sampleRate: 1
                                },
                                "39976963": {
                                    sampleRate: 1
                                },
                                "39976964": {
                                    sampleRate: 1
                                },
                                "39976965": {
                                    sampleRate: 1
                                },
                                "40042497": {
                                    sampleRate: 1
                                },
                                "40042498": {
                                    sampleRate: 1
                                },
                                "40042499": {
                                    sampleRate: 1
                                },
                                "40108033": {
                                    sampleRate: 1
                                },
                                "40304641": {
                                    sampleRate: 10000
                                },
                                "40501249": {
                                    sampleRate: 1
                                },
                                "40501250": {
                                    sampleRate: 1
                                },
                                "40501251": {
                                    sampleRate: 1
                                },
                                "40501252": {
                                    sampleRate: 1
                                },
                                "40828929": {
                                    sampleRate: 1
                                },
                                "40828930": {
                                    sampleRate: 1
                                },
                                "40828931": {
                                    sampleRate: 1
                                },
                                "40828932": {
                                    sampleRate: 1
                                },
                                "40828933": {
                                    sampleRate: 1
                                },
                                "40828934": {
                                    sampleRate: 1
                                },
                                "40828935": {
                                    sampleRate: 1
                                },
                                "40828936": {
                                    sampleRate: 1
                                },
                                "40894465": {
                                    sampleRate: 1
                                },
                                "40894466": {
                                    sampleRate: 1
                                },
                                "40894467": {
                                    sampleRate: 1
                                },
                                "40894468": {
                                    sampleRate: 1
                                },
                                "40894469": {
                                    sampleRate: 1
                                },
                                "40894470": {
                                    sampleRate: 1
                                },
                                "40894471": {
                                    sampleRate: 1
                                },
                                "40894472": {
                                    sampleRate: 1
                                },
                                "40894473": {
                                    sampleRate: 1
                                },
                                "40894474": {
                                    sampleRate: 1
                                },
                                "40894475": {
                                    sampleRate: 1
                                },
                                "40894476": {
                                    sampleRate: 1
                                },
                                "40894477": {
                                    sampleRate: 1
                                },
                                "40894478": {
                                    sampleRate: 1
                                },
                                "40894479": {
                                    sampleRate: 1
                                },
                                "40894480": {
                                    sampleRate: 1
                                },
                                "40894481": {
                                    sampleRate: 1
                                },
                                "40894482": {
                                    sampleRate: 1
                                },
                                "40894483": {
                                    sampleRate: 1
                                },
                                "40894484": {
                                    sampleRate: 1
                                },
                                "40894485": {
                                    sampleRate: 1
                                },
                                "40894486": {
                                    sampleRate: 1
                                },
                                "40894487": {
                                    sampleRate: 1
                                },
                                "40894488": {
                                    sampleRate: 1
                                },
                                "40894489": {
                                    sampleRate: 1
                                },
                                "40894490": {
                                    sampleRate: 1
                                },
                                "40894491": {
                                    sampleRate: 1
                                },
                                "41484289": {
                                    sampleRate: 10
                                },
                                "41484290": {
                                    sampleRate: 100
                                },
                                "41484291": {
                                    sampleRate: 100
                                },
                                "41484293": {
                                    sampleRate: 100
                                },
                                "41484294": {
                                    sampleRate: 200
                                },
                                "41484295": {
                                    sampleRate: 100
                                },
                                "41484296": {
                                    sampleRate: 100
                                },
                                "41484297": {
                                    sampleRate: 100
                                },
                                "41484298": {
                                    sampleRate: 100
                                },
                                "41484299": {
                                    sampleRate: 100
                                },
                                "41484300": {
                                    sampleRate: 100
                                },
                                "41484301": {
                                    sampleRate: 1
                                },
                                "41484302": {
                                    sampleRate: 100
                                },
                                "41484303": {
                                    sampleRate: 100
                                },
                                "41811969": {
                                    sampleRate: 1
                                },
                                "42532865": {
                                    sampleRate: 100
                                },
                                "42532866": {
                                    sampleRate: 10000
                                },
                                "42729473": {
                                    sampleRate: 1
                                },
                                "42729474": {
                                    sampleRate: 1
                                },
                                "42729475": {
                                    sampleRate: 1
                                },
                                "42729476": {
                                    sampleRate: 1
                                },
                                "43974657": {
                                    sampleRate: 1
                                },
                                "44040193": {
                                    sampleRate: 1
                                },
                                "44433409": {
                                    sampleRate: 1
                                },
                                "44433410": {
                                    sampleRate: 1
                                },
                                "44433411": {
                                    sampleRate: 1
                                },
                                "44892161": {
                                    sampleRate: 1
                                },
                                "44892162": {
                                    sampleRate: 1
                                },
                                "44892163": {
                                    sampleRate: 1
                                },
                                "44892164": {
                                    sampleRate: 1
                                },
                                "44957697": {
                                    sampleRate: 100
                                },
                                "44957698": {
                                    sampleRate: 1
                                },
                                "44957699": {
                                    sampleRate: 1
                                },
                                "44957700": {
                                    sampleRate: 100
                                },
                                "44957701": {
                                    sampleRate: 1
                                },
                                "44957702": {
                                    sampleRate: 1
                                },
                                "45023238": {
                                    sampleRate: 10000
                                },
                                "45023239": {
                                    sampleRate: 10000
                                },
                                "45023240": {
                                    sampleRate: 10000
                                },
                                "45088770": {
                                    sampleRate: 1
                                },
                                "45613057": {
                                    sampleRate: 1
                                },
                                "45613058": {
                                    sampleRate: 1
                                },
                                "45613059": {
                                    sampleRate: 1
                                },
                                "45678593": {
                                    sampleRate: 1
                                },
                                "46071809": {
                                    sampleRate: 1
                                },
                                "46071810": {
                                    sampleRate: 1
                                },
                                "46071811": {
                                    sampleRate: 1
                                },
                                "46071812": {
                                    sampleRate: 1
                                },
                                "46596097": {
                                    sampleRate: 1
                                },
                                "46596098": {
                                    sampleRate: 1
                                },
                                "47841281": {
                                    sampleRate: 1
                                },
                                "47841282": {
                                    sampleRate: 1
                                },
                                "47841283": {
                                    sampleRate: 1
                                },
                                "48431105": {
                                    sampleRate: 10000
                                },
                                "48431106": {
                                    sampleRate: 10000
                                },
                                "48496641": {
                                    sampleRate: 10000
                                },
                                "48758785": {
                                    sampleRate: 10000
                                },
                                "48758786": {
                                    sampleRate: 10000
                                },
                                "49283073": {
                                    sampleRate: 1
                                },
                                "49283074": {
                                    sampleRate: 1
                                },
                                "49283075": {
                                    sampleRate: 1
                                },
                                "49479681": {
                                    sampleRate: 1
                                }
                            },
                            killswitch: false
                        }, 3504],
                        ["MPageControllerGating", [], {
                            shouldDeferUntilCertainNoRedirect: false,
                            shouldReleaseFetcherLock: false,
                            shouldLoadingScreenSetScriptPath: false,
                            shouldRenderAsync404: false
                        }, 2023],
                        ["TimeSliceInteractionSV", [], {
                            on_demand_reference_counting: true,
                            on_demand_profiling_counters: true,
                            default_rate: 1000,
                            lite_default_rate: 100,
                            interaction_to_lite_coinflip: {
                                ADS_INTERFACES_INTERACTION: 0,
                                ads_perf_scenario: 0,
                                ads_wait_time: 0,
                                Event: 10,
                                video_psr: 0,
                                video_stall: 0
                            },
                            interaction_to_coinflip: {
                                ADS_INTERFACES_INTERACTION: 1,
                                ads_perf_scenario: 1,
                                ads_wait_time: 1,
                                video_psr: 1000000,
                                video_stall: 2500000,
                                Event: 500,
                                pixelcloud_view_performance: 25,
                                intern_notify_inbox_page_load: 10,
                                intern_notify_jewel_list_load: 10,
                                tasks_initial_page_load: 1,
                                watch_carousel_left_scroll: 1,
                                watch_carousel_right_scroll: 1,
                                watch_sections_load_more: 1,
                                watch_discover_scroll: 1,
                                fbpkg_ui: 1,
                                sevmanager_powersearch_initial_page_load: 10,
                                network_ui: 1,
                                daiquery_interactive_query: 1
                            },
                            enable_heartbeat: true,
                            maxBlockMergeDuration: 0,
                            maxBlockMergeDistance: 0,
                            enable_banzai_stream: true,
                            user_timing_coinflip: 50,
                            banzai_stream_coinflip: 1,
                            compression_enabled: true,
                            ref_counting_fix: false,
                            ref_counting_cont_fix: false,
                            also_record_new_timeslice_format: false,
                            force_async_request_tracing_on: false
                        }, 2609],
                        ["FbtQTOverrides", [], {
                            overrides: {}
                        }, 551]
                    ]
                },
                last_in_phase: true,
                tti_phase: 0,
                all_phases: [63]
            });
        }), "onPageletArrive first_response", {
            "root": true,
            "pagelet": "first_response"
        })();
    </script>
    <script>
        bigPipe.setPageID("6767691084278792366-0");
        CavalryLogger.setPageID("6767691084278792366-0");
    </script>
    <script>
        bigPipe.beforePageletArrive("last_response")
    </script>
    <script>
        require("TimeSlice").guard((function() {
            bigPipe.onPageletArrive({
                resource_map: {
                    FEt5G: {
                        type: "js",
                        src: "https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/svFKQXueTby.js?_nc_x=Ij3Wp8lg5Kz",
                        nc: 1
                    }
                },
                allResources: ["sVEZ3", "rhY/c", "h5fCD", "BsoEr", "MEigw", "vgA39", "piPs3", "O8x56", "mSBrt", "HvugD", "Iw+tw", "FEt5G"],
                displayResources: ["sVEZ3", "rhY/c", "h5fCD", "BsoEr", "vgA39", "piPs3", "mSBrt", "Iw+tw"],
                onload: ["CavalryLogger.getInstance(\"6767691084278792366-0\").setTTIEvent(\"t_domcontent\");"],
                onafterload: ["window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6767691084278792366-0\").setValue(\"t_exit\", window.ExitTime);};"],
                id: "last_response",
                phase: 63,
                jsmods: {
                    require: [
                        ["NavigationMetrics", "setPage", [],
                            [{
                                page: "/wap/index.php",
                                page_type: "normal",
                                page_uri: "https://m.facebook.com/?refsrc=https%3A%2F%2Fm.facebook.com%2F&_rdr",
                                serverLID: "6767691084278792366-0"
                            }]
                        ],
                        ["CavalryLoggerImpl", "startInstrumentation", [],
                            []
                        ],
                        ["Artillery", "disable", [],
                            []
                        ],
                        ["ArtilleryOnUntilOffLogging", "disable", [],
                            []
                        ],
                        ["ArtilleryRequestDataCollection", "disable", [],
                            ["6767691084278792366-0"]
                        ],
                        ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                            []
                        ]
                    ],
                    define: [
                        ["cr:1109759", ["CookieConsentBlacklist"], {
                            __rc: ["CookieConsentBlacklist", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["cr:1083116", ["XAsyncRequest"], {
                            __rc: ["XAsyncRequest", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["cr:1069930", [], {
                            __rc: [null, "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["cr:1083117", [], {
                            __rc: [null, "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["cr:708886", ["EventProfilerImpl"], {
                            __rc: ["EventProfilerImpl", "Aa0c6lG2nNva36nqKcwicJZK_Tftqsz6ZZ_NmVShqorAdMvbaxXo-MEA8hU2eGvgrPKEACAcVlvcWBj3cixdiiQ"]
                        }, -1],
                        ["MTouchableSyntheticClickGK", [], {
                            USE_SYNTHETIC_CLICK: true
                        }, 368],
                        ["BrowserPushPubKey", [], {
                            appServerKey: ""
                        }, 4806],
                        ["BrowserPaymentHandlerConfig", [], {
                            enabled: false
                        }, 3904],
                        ["EventConfig", [], {
                            sampling: {
                                bandwidth: 0,
                                play: 0,
                                playing: 0,
                                progress: 0,
                                pause: 0,
                                ended: 0,
                                seeked: 0,
                                seeking: 0,
                                waiting: 0,
                                loadedmetadata: 0,
                                canplay: 0,
                                selectionchange: 0,
                                change: 0,
                                timeupdate: 2000000,
                                adaptation: 0,
                                focus: 0,
                                blur: 0,
                                load: 0,
                                error: 0,
                                message: 0,
                                abort: 0,
                                storage: 0,
                                scroll: 200000,
                                mousemove: 20000,
                                mouseover: 10000,
                                mouseout: 10000,
                                mousewheel: 1,
                                MSPointerMove: 10000,
                                keydown: 0.1,
                                click: 0.02,
                                mouseup: 0.02,
                                __100ms: 0.001,
                                __default: 5000,
                                __min: 100,
                                __interactionDefault: 200,
                                __eventDefault: 100000
                            },
                            page_sampling_boost: 1,
                            interaction_regexes: {
                                BlueBarAccountChevronMenu: " _5lxs(?: .*)?$",
                                BlueBarHomeButton: " _bluebarLinkHome__interaction-root(?: .*)?$",
                                BlueBarProfileLink: " _1k67(?: .*)?$",
                                ReactComposerSproutMedia: " _1pnt(?: .*)?$",
                                ReactComposerSproutAlbum: " _1pnu(?: .*)?$",
                                ReactComposerSproutNote: " _3-9x(?: .*)?$",
                                ReactComposerSproutLocation: " _1pnv(?: .*)?$",
                                ReactComposerSproutActivity: " _1pnz(?: .*)?$",
                                ReactComposerSproutPeople: " _1pn-(?: .*)?$",
                                ReactComposerSproutLiveVideo: " _5tv7(?: .*)?$",
                                ReactComposerSproutMarkdown: " _311p(?: .*)?$",
                                ReactComposerSproutFormattedText: " _mwg(?: .*)?$",
                                ReactComposerSproutSticker: " _2vri(?: .*)?$",
                                ReactComposerSproutSponsor: " _5t5q(?: .*)?$",
                                ReactComposerSproutEllipsis: " _1gr3(?: .*)?$",
                                ReactComposerSproutContactYourRepresentative: " _3cnv(?: .*)?$",
                                ReactComposerSproutFunFact: " _2_xs(?: .*)?$",
                                TextExposeSeeMoreLink: " see_more_link(?: .*)?$",
                                SnowliftBigCloseButton: "(?: _xlt(?: .*)? _418x(?: .*)?$| _418x(?: .*)? _xlt(?: .*)?$)",
                                SnowliftPrevPager: "(?: snowliftPager(?: .*)? prev(?: .*)?$| prev(?: .*)? snowliftPager(?: .*)?$)",
                                SnowliftNextPager: "(?: snowliftPager(?: .*)? next(?: .*)?$| next(?: .*)? snowliftPager(?: .*)?$)",
                                SnowliftFullScreenButton: "#fbPhotoSnowliftFullScreenSwitch( .+)*",
                                PrivacySelectorMenu: "(?: _57di(?: .*)? _2wli(?: .*)?$| _2wli(?: .*)? _57di(?: .*)?$)",
                                ReactComposerFeedXSprouts: " _nh6(?: .*)?$",
                                SproutsComposerStatusTab: " _sg1(?: .*)?$",
                                SproutsComposerLiveVideoTab: " _sg1(?: .*)?$",
                                SproutsComposerAlbumTab: " _sg1(?: .*)?$",
                                composerAudienceSelector: " _ej0(?: .*)?$",
                                FeedHScrollAttachmentsPrevPager: " _1qqy(?: .*)?$",
                                FeedHScrollAttachmentsNextPager: " _1qqz(?: .*)?$",
                                DockChatTabFlyout: " fbDockChatTabFlyout(?: .*)?$",
                                PrivacyLiteJewel: " _59fc(?: .*)?$",
                                ActorSelector: " _6vh(?: .*)?$",
                                LegacyMentionsInput: "(?: ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)? _2xwx(?: .*)?$| uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)?$| _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)?$| ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)? uiMentionsInput(?: .*)?$| uiMentionsInput(?: .*)? _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)?$| _2xwx(?: .*)? uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)?$)",
                                UFIActionLinksEmbedLink: " _2g1w(?: .*)?$",
                                UFIPhotoAttachLink: " UFIPhotoAttachLinkWrapper(?: .*)?$",
                                UFIMentionsInputProxy: " _1osa(?: .*)?$",
                                UFIMentionsInputDummy: " _1osc(?: .*)?$",
                                UFIOrderingModeSelector: " _3scp(?: .*)?$",
                                UFIPager: "(?: UFIPagerRow(?: .*)? UFIRow(?: .*)?$| UFIRow(?: .*)? UFIPagerRow(?: .*)?$)",
                                UFIReplyRow: "(?: UFIReplyRow(?: .*)? UFICommentReply(?: .*)?$| UFICommentReply(?: .*)? UFIReplyRow(?: .*)?$)",
                                UFIReplySocialSentence: " UFIReplySocialSentenceRow(?: .*)?$",
                                UFIShareLink: " _5f9b(?: .*)?$",
                                UFIStickerButton: " UFICommentStickerButton(?: .*)?$",
                                MentionsInput: " _5yk1(?: .*)?$",
                                FantaChatTabRoot: " _3_9e(?: .*)?$",
                                SnowliftViewableRoot: " _2-sx(?: .*)?$",
                                ReactBlueBarJewelButton: " _5fwr(?: .*)?$",
                                UFIReactionsDialogLayerImpl: " _1oxk(?: .*)?$",
                                UFIReactionsLikeLinkImpl: " _4x9_(?: .*)?$",
                                UFIReactionsLinkImplRoot: " _khz(?: .*)?$",
                                Reaction: " _iuw(?: .*)?$",
                                UFIReactionsMenuImpl: " _iu-(?: .*)?$",
                                UFIReactionsSpatialReactionIconContainer: " _1fq9(?: .*)?$",
                                VideoComponentPlayButton: " _bsl(?: .*)?$",
                                FeedOptionsPopover: " _b1e(?: .*)?$",
                                UFICommentLikeCount: " UFICommentLikeButton(?: .*)?$",
                                UFICommentLink: " _5yxe(?: .*)?$",
                                ChatTabComposerInputContainer: " _552h(?: .*)?$",
                                ChatTabHeader: " _15p4(?: .*)?$",
                                DraftEditor: " _5rp7(?: .*)?$",
                                ChatSideBarDropDown: " _5vm9(?: .*)?$",
                                SearchBox: " _539-(?: .*)?$",
                                ChatSideBarLink: " _55ln(?: .*)?$",
                                MessengerSearchTypeahead: " _3rh8(?: .*)?$",
                                NotificationListItem: " _33c(?: .*)?$",
                                MessageJewelListItem: " messagesContent(?: .*)?$",
                                Messages_Jewel_Button: " _3eo8(?: .*)?$",
                                Notifications_Jewel_Button: " _3eo9(?: .*)?$",
                                snowliftopen: " _342u(?: .*)?$",
                                NoteTextSeeMoreLink: " _3qd_(?: .*)?$",
                                fbFeedOptionsPopover: " _1he6(?: .*)?$",
                                Requests_Jewel_Button: " _3eoa(?: .*)?$",
                                UFICommentActionLinkAjaxify: " _15-3(?: .*)?$",
                                UFICommentActionLinkRedirect: " _15-6(?: .*)?$",
                                UFICommentActionLinkDispatched: " _15-7(?: .*)?$",
                                UFICommentCloseButton: " _36rj(?: .*)?$",
                                UFICommentActionsRemovePreview: " _460h(?: .*)?$",
                                UFICommentActionsReply: " _460i(?: .*)?$",
                                UFICommentActionsSaleItemMessage: " _460j(?: .*)?$",
                                UFICommentActionsAcceptAnswer: " _460k(?: .*)?$",
                                UFICommentActionsUnacceptAnswer: " _460l(?: .*)?$",
                                UFICommentReactionsLikeLink: " _3-me(?: .*)?$",
                                UFICommentMenu: " _1-be(?: .*)?$",
                                UFIMentionsInputFallback: " _289b(?: .*)?$",
                                UFIMentionsInputComponent: " _289c(?: .*)?$",
                                UFIMentionsInputProxyInput: " _432z(?: .*)?$",
                                UFIMentionsInputProxyDummy: " _432-(?: .*)?$",
                                UFIPrivateReplyLinkMessage: " _14hj(?: .*)?$",
                                UFIPrivateReplyLinkSeeReply: " _14hk(?: .*)?$",
                                ChatCloseButton: " _4vu4(?: .*)?$",
                                ChatTabComposerPhotoUploader: " _13f-(?: .*)?$",
                                ChatTabComposerGroupPollingButton: " _13f_(?: .*)?$",
                                ChatTabComposerGames: " _13ga(?: .*)?$",
                                ChatTabComposerPlan: " _13gb(?: .*)?$",
                                ChatTabComposerFileUploader: " _13gd(?: .*)?$",
                                ChatTabStickersButton: " _13ge(?: .*)?$",
                                ChatTabComposerGifButton: " _13gf(?: .*)?$",
                                ChatTabComposerEmojiPicker: " _13gg(?: .*)?$",
                                ChatTabComposerLikeButton: " _13gi(?: .*)?$",
                                ChatTabComposerP2PButton: " _13gj(?: .*)?$",
                                ChatTabComposerQuickCam: " _13gk(?: .*)?$",
                                ChatTabHeaderAudioRTCButton: " _461a(?: .*)?$",
                                ChatTabHeaderVideoRTCButton: " _461b(?: .*)?$",
                                ChatTabHeaderOptionsButton: " _461_(?: .*)?$",
                                ChatTabHeaderAddToThreadButton: " _4620(?: .*)?$",
                                ReactComposerMediaSprout: " _fk5(?: .*)?$",
                                UFIReactionsBlingSocialSentenceComments: " _-56(?: .*)?$",
                                UFIReactionsBlingSocialSentenceSeens: " _2x0l(?: .*)?$",
                                UFIReactionsBlingSocialSentenceShares: " _2x0m(?: .*)?$",
                                UFIReactionsBlingSocialSentenceViews: " _-5c(?: .*)?$",
                                UFIReactionsBlingSocialSentence: " _-5d(?: .*)?$",
                                UFIReactionsSocialSentence: " _1vaq(?: .*)?$",
                                VideoFullscreenButton: " _39ip(?: .*)?$",
                                Tahoe: " _400z(?: .*)?$",
                                TahoeFromVideoPlayer: " _1vek(?: .*)?$",
                                TahoeFromVideoLink: " _2-40(?: .*)?$",
                                TahoeFromPhoto: " _2ju5(?: .*)?$",
                                FBStoryTrayItem: " _1fvw(?: .*)?$",
                                Mobile_Feed_Jewel_Button: "#feed_jewel( .+)*",
                                Mobile_Requests_Jewel_Button: "#requests_jewel( .+)*",
                                Mobile_Messages_Jewel_Button: "#messages_jewel( .+)*",
                                Mobile_Notifications_Jewel_Button: "#notifications_jewel( .+)*",
                                Mobile_Search_Jewel_Button: "#search_jewel( .+)*",
                                Mobile_Bookmarks_Jewel_Button: "#bookmarks_jewel( .+)*",
                                Mobile_Feed_UFI_Comment_Button_Permalink: " _l-a(?: .*)?$",
                                Mobile_Feed_UFI_Comment_Button_Flyout: " _4qeq(?: .*)?$",
                                Mobile_Feed_UFI_Token_Bar_Flyout: " _4qer(?: .*)?$",
                                Mobile_Feed_UFI_Token_Bar_Permalink: " _4-09(?: .*)?$",
                                Mobile_UFI_Share_Button: " _15kr(?: .*)?$",
                                Mobile_Feed_Photo_Permalink: " _1mh-(?: .*)?$",
                                Mobile_Feed_Video_Permalink: " _65g_(?: .*)?$",
                                Mobile_Feed_Profile_Permalink: " _4kk6(?: .*)?$",
                                Mobile_Feed_Story_Permalink: " _26yo(?: .*)?$",
                                Mobile_Feed_Page_Permalink: " _4e81(?: .*)?$",
                                Mobile_Feed_Group_Permalink: " _20u1(?: .*)?$",
                                Mobile_Feed_Event_Permalink: " _20u0(?: .*)?$",
                                ProfileIntroCardAddFeaturedMedia: " _30qr(?: .*)?$",
                                ProfileSectionAbout: " _84wb(?: .*)?$",
                                ProfileSectionAllRelationships: " _84wc(?: .*)?$",
                                ProfileSectionAtWork: " _2fnv(?: .*)?$",
                                ProfileSectionContactBasic: " _84vf(?: .*)?$",
                                ProfileSectionEducation: " _84vh(?: .*)?$",
                                ProfileSectionOverview: " _84vj(?: .*)?$",
                                ProfileSectionPlaces: " _84vg(?: .*)?$",
                                ProfileSectionYearOverviews: " _84vi(?: .*)?$",
                                IntlPolyglotHomepage: " _Interaction__IntlPolyglotVoteActivityCardButton(?: .*)?$",
                                ProtonElementSelection: " _67ft(?: .*)?$"
                            },
                            interaction_boost: {
                                SnowliftPrevPager: 0.2,
                                SnowliftNextPager: 0.2,
                                ChatSideBarLink: 2,
                                MessengerSearchTypeahead: 2,
                                Messages_Jewel_Button: 2.5,
                                Notifications_Jewel_Button: 1.5,
                                Tahoe: 30,
                                ProtonElementSelection: 4
                            },
                            event_types: {
                                BlueBarAccountChevronMenu: ["click"],
                                BlueBarHomeButton: ["click"],
                                BlueBarProfileLink: ["click"],
                                ReactComposerSproutMedia: ["click"],
                                ReactComposerSproutAlbum: ["click"],
                                ReactComposerSproutNote: ["click"],
                                ReactComposerSproutLocation: ["click"],
                                ReactComposerSproutActivity: ["click"],
                                ReactComposerSproutPeople: ["click"],
                                ReactComposerSproutLiveVideo: ["click"],
                                ReactComposerSproutMarkdown: ["click"],
                                ReactComposerSproutFormattedText: ["click"],
                                ReactComposerSproutSticker: ["click"],
                                ReactComposerSproutSponsor: ["click"],
                                ReactComposerSproutEllipsis: ["click"],
                                ReactComposerSproutContactYourRepresentative: ["click"],
                                ReactComposerSproutFunFact: ["click"],
                                TextExposeSeeMoreLink: ["click"],
                                SnowliftBigCloseButton: ["click"],
                                SnowliftPrevPager: ["click"],
                                SnowliftNextPager: ["click"],
                                SnowliftFullScreenButton: ["click"],
                                PrivacySelectorMenu: ["click"],
                                ReactComposerFeedXSprouts: ["click"],
                                SproutsComposerStatusTab: ["click"],
                                SproutsComposerLiveVideoTab: ["click"],
                                SproutsComposerAlbumTab: ["click"],
                                composerAudienceSelector: ["click"],
                                FeedHScrollAttachmentsPrevPager: ["click"],
                                FeedHScrollAttachmentsNextPager: ["click"],
                                DockChatTabFlyout: ["click"],
                                PrivacyLiteJewel: ["click"],
                                ActorSelector: ["click"],
                                LegacyMentionsInput: ["click"],
                                UFIActionLinksEmbedLink: ["click"],
                                UFIPhotoAttachLink: ["click"],
                                UFIMentionsInputProxy: ["click"],
                                UFIMentionsInputDummy: ["click"],
                                UFIOrderingModeSelector: ["click"],
                                UFIPager: ["click"],
                                UFIReplyRow: ["click"],
                                UFIReplySocialSentence: ["click"],
                                UFIShareLink: ["click"],
                                UFIStickerButton: ["click"],
                                MentionsInput: ["click"],
                                FantaChatTabRoot: ["click"],
                                SnowliftViewableRoot: ["click"],
                                ReactBlueBarJewelButton: ["click"],
                                UFIReactionsDialogLayerImpl: ["click"],
                                UFIReactionsLikeLinkImpl: ["click"],
                                UFIReactionsLinkImplRoot: ["click"],
                                Reaction: ["click"],
                                UFIReactionsMenuImpl: ["click"],
                                UFIReactionsSpatialReactionIconContainer: ["click"],
                                VideoComponentPlayButton: ["click"],
                                FeedOptionsPopover: ["click"],
                                UFICommentLikeCount: ["click"],
                                UFICommentLink: ["click"],
                                ChatTabComposerInputContainer: ["click"],
                                ChatTabHeader: ["click"],
                                DraftEditor: ["click"],
                                ChatSideBarDropDown: ["click"],
                                SearchBox: ["click"],
                                ChatSideBarLink: ["mouseup"],
                                MessengerSearchTypeahead: ["click"],
                                NotificationListItem: ["click"],
                                MessageJewelListItem: ["click"],
                                Messages_Jewel_Button: ["click"],
                                Notifications_Jewel_Button: ["click"],
                                snowliftopen: ["click"],
                                NoteTextSeeMoreLink: ["click"],
                                fbFeedOptionsPopover: ["click"],
                                Requests_Jewel_Button: ["click"],
                                UFICommentActionLinkAjaxify: ["click"],
                                UFICommentActionLinkRedirect: ["click"],
                                UFICommentActionLinkDispatched: ["click"],
                                UFICommentCloseButton: ["click"],
                                UFICommentActionsRemovePreview: ["click"],
                                UFICommentActionsReply: ["click"],
                                UFICommentActionsSaleItemMessage: ["click"],
                                UFICommentActionsAcceptAnswer: ["click"],
                                UFICommentActionsUnacceptAnswer: ["click"],
                                UFICommentReactionsLikeLink: ["click"],
                                UFICommentMenu: ["click"],
                                UFIMentionsInputFallback: ["click"],
                                UFIMentionsInputComponent: ["click"],
                                UFIMentionsInputProxyInput: ["click"],
                                UFIMentionsInputProxyDummy: ["click"],
                                UFIPrivateReplyLinkMessage: ["click"],
                                UFIPrivateReplyLinkSeeReply: ["click"],
                                ChatCloseButton: ["click"],
                                ChatTabComposerPhotoUploader: ["click"],
                                ChatTabComposerGroupPollingButton: ["click"],
                                ChatTabComposerGames: ["click"],
                                ChatTabComposerPlan: ["click"],
                                ChatTabComposerFileUploader: ["click"],
                                ChatTabStickersButton: ["click"],
                                ChatTabComposerGifButton: ["click"],
                                ChatTabComposerEmojiPicker: ["click"],
                                ChatTabComposerLikeButton: ["click"],
                                ChatTabComposerP2PButton: ["click"],
                                ChatTabComposerQuickCam: ["click"],
                                ChatTabHeaderAudioRTCButton: ["click"],
                                ChatTabHeaderVideoRTCButton: ["click"],
                                ChatTabHeaderOptionsButton: ["click"],
                                ChatTabHeaderAddToThreadButton: ["click"],
                                ReactComposerMediaSprout: ["click"],
                                UFIReactionsBlingSocialSentenceComments: ["click"],
                                UFIReactionsBlingSocialSentenceSeens: ["click"],
                                UFIReactionsBlingSocialSentenceShares: ["click"],
                                UFIReactionsBlingSocialSentenceViews: ["click"],
                                UFIReactionsBlingSocialSentence: ["click"],
                                UFIReactionsSocialSentence: ["click"],
                                VideoFullscreenButton: ["click"],
                                Tahoe: ["click"],
                                TahoeFromVideoPlayer: ["click"],
                                TahoeFromVideoLink: ["click"],
                                TahoeFromPhoto: ["click"],
                                "": ["click"],
                                FBStoryTrayItem: ["click"],
                                Mobile_Feed_Jewel_Button: ["click"],
                                Mobile_Requests_Jewel_Button: ["click"],
                                Mobile_Messages_Jewel_Button: ["click"],
                                Mobile_Notifications_Jewel_Button: ["click"],
                                Mobile_Search_Jewel_Button: ["click"],
                                Mobile_Bookmarks_Jewel_Button: ["click"],
                                Mobile_Feed_UFI_Comment_Button_Permalink: ["click"],
                                Mobile_Feed_UFI_Comment_Button_Flyout: ["click"],
                                Mobile_Feed_UFI_Token_Bar_Flyout: ["click"],
                                Mobile_Feed_UFI_Token_Bar_Permalink: ["click"],
                                Mobile_UFI_Share_Button: ["click"],
                                Mobile_Feed_Photo_Permalink: ["click"],
                                Mobile_Feed_Video_Permalink: ["click"],
                                Mobile_Feed_Profile_Permalink: ["click"],
                                Mobile_Feed_Story_Permalink: ["click"],
                                Mobile_Feed_Page_Permalink: ["click"],
                                Mobile_Feed_Group_Permalink: ["click"],
                                Mobile_Feed_Event_Permalink: ["click"],
                                ProfileIntroCardAddFeaturedMedia: ["click"],
                                ProfileSectionAbout: ["click"],
                                ProfileSectionAllRelationships: ["click"],
                                ProfileSectionAtWork: ["click"],
                                ProfileSectionContactBasic: ["click"],
                                ProfileSectionEducation: ["click"],
                                ProfileSectionOverview: ["click"],
                                ProfileSectionPlaces: ["click"],
                                ProfileSectionYearOverviews: ["click"],
                                IntlPolyglotHomepage: ["click"],
                                ProtonElementSelection: ["click"]
                            },
                            manual_instrumentation: false,
                            profile_eager_execution: true,
                            disable_heuristic: true,
                            disable_event_profiler: false
                        }, 1726],
                        ["KillabyteProfilerConfig", [], {
                            htmlProfilerModule: null,
                            profilerModule: null,
                            depTypes: {
                                BL: "bl",
                                NON_BL: "non-bl"
                            }
                        }, 1145],
                        ["QuicklingConfig", [], {
                            version: "1001512753;0;",
                            sessionLength: 10,
                            inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                            badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                            logRefreshOverhead: false
                        }, 60]
                    ]
                },
                last_in_phase: true,
                the_end: true
            });
        }), "onPageletArrive last_response", {
            "root": true,
            "pagelet": "last_response"
        })();
    </script>
</body>

</html>