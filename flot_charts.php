<!DOCTYPE html>
<!-- saved from url=(0052)https://adminlte.io/themes/v3/pages/charts/flot.html -->
<html lang="en" style="height: auto;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Flot Charts</title>

    <link rel="stylesheet" href="./AdminLTE 3 _ Flot Charts_files/css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Flot Charts_files/all.min.css">

    <link rel="stylesheet" href="./AdminLTE 3 _ Flot Charts_files/adminlte.min.css">
    <script defer="" referrerpolicy="origin" src="./AdminLTE 3 _ Flot Charts_files/s.js.indir"></script><script nonce="dcbd494c-b3b8-4144-941c-2f1041c15054">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script><style type="text/css">:root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root mq-programmatic-ad, :root iframe[src^="http://www.adpeepshosted.com/adpeeps.php?"], :root div[id^="zergnet-widget"], :root div[id^="traffective-ad-"], :root div[id^="taboola-stream-"], :root div[id^="sticky_ad_"], :root div[id^="rc-widget-"], :root div[id^="proadszone-"], :root div[id^="lazyad-"], :root div[id^="js-dfp-"], :root div[id^="gtm-ad-"], :root div[id^="google_dfp_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="div-adtech-ad-"], :root div[id^="dfp-slot-"], :root div[id^="dfp-ad-"], :root div[id^="code_ads_"], :root div[id^="banner-ad-"], :root div[id^="advt-"], :root div[id^="advads_"], :root div[id^="advads-"], :root div[id^="adspot-"], :root div[id^="ads300_100-widget-"], :root div[id^="adrotate_widgets-"], :root div[id^="adngin-"], :root div[id^="adfox_"], :root div[id^="ad_script_"], :root div[id^="ad_rect_"], :root div[id^="ad_position_"], :root div[id^="ad-server-"], :root div[id^="ad-inserter-"], :root div[id^="ad-cid-"], :root div[id^="_vdo_ads_player_ai_"], :root div[data-test-id="AdDisplayWrapper"], :root div[data-subscript="Advertising"], :root div[data-spotim-slot], :root div[data-role="sidebarAd"], :root div[data-native_ad], :root div[data-mediatype="advertising"], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-dfp-id], :root div[data-content="Advertisement"], :root div[data-adunit], :root div[data-adunit-path], :root div[data-before-content="advertisement"], :root div[data-adservice-param-tagid="contentad"], :root div[data-adname], :root div[data-ad-wrapper], :root div[data-ad-underplayer], :root div[data-ad-placeholder], :root div[class^="sp-adslot-"], :root div[class^="s-dfp-"], :root div[class^="proadszone-"], :root div[class^="pane-google-admanager-"], :root div[class^="native-ad-"], :root div[class^="lifeOnwerAd"], :root div[class^="largeRectangleAd_"], :root div[class^="kiwiad-popup"], :root div[class^="kiwiad-desktop"], :root div[class^="index_adBeforeContent_"], :root div[class^="index_adAfterContent_"], :root div[class^="index__adWrapper"], :root div[class^="block-openx-"], :root div[class^="backfill-taboola-home-slot-"], :root div[class^="articleAdUnitMPU_"], :root div[class^="advertisement-desktop"], :root div[class^="adunit_"], :root div[class^="adsbutt_wrapper_"], :root div[class^="ads-partner-"], :root div[class^="adpubs-"], :root div[class^="adbanner_"], :root div[class^="ad_position_"], :root div[class^="SponsoredAds"], :root div[class^="ResponsiveAd-"], :root div[class^="PreAd_"], :root div[class^="Display_displayAd"], :root div[class^="Directory__footerAds"], :root div[class^="Component-dfp-"], :root div[class^="BlockAdvert-"], :root div[class^="BannerAd_"], :root div[class^="AdhesionAd_"], :root div[class^="Ad__bigBox"], :root div[class^="Ad__adContainer"], :root div[class^="AdSlot__container"], :root div[class^="ad_border_"], :root div[class^="AdItem-"], :root div[class^="AdEmbeded__AddWrapper"], :root span[data-component-type="s-ads-metrics"], :root div[class^="AdBannerWrapper-"], :root display-ads, :root display-ad-component, :root a[href^="http://lp.ezdownloadpro.info/"], :root a[href^="http://uploaded.net/ref/"], :root aside[id^="advads_ad_widget-"], :root aside[id^="adrotate_widgets-"], :root a[href^="https://ad.doubleclick.net/"], :root app-advertisement, :root amp-ad-custom, :root [data-ad-width], :root [id*="MGWrap"], :root ad-desktop-sidebar, :root aa[href^="https://itubego.com/video-downloader/?affid="], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root div[id^="div-ads-"], :root a[href^="http://at.atwola.com/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://www.vfreecams.com/in/?track="], :root a[href^="https://www.share-online.biz/affiliate/"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root DFP-AD, :root a[href^="//porngames.adult/?SID="], :root a[href^="https://www.oneclickroot.com/?tap_a="] > img, :root a[href^="https://www.oboom.com/ad/"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://www.mrskin.com/account/"], :root div[data-adzone], :root a[href^="https://www.iyalc.com/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://www.gambling-affiliation.com/cpc/"], :root a[href^="http://webgirlz.online/landing/"], :root a[href^="https://www.g4mz.com/"], :root a[href^="https://www.dollps.com/?track="], :root a[href^="https://www.clicktraceclick.com/"], :root a[href^="https://www.camsoda.com/enter.php?id="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root a[href^="https://www.bebi.com"], :root .card-captioned.crd > .crd--cnt > .s2nPlayer, :root a[href^="https://www.arthrozene.com/"][href*="?tid="], :root a[href^="https://www.adskeeper.co.uk/"], :root a[href^="https://t.grtyi.com/"], :root a[href^="https://wittered-mainging.com/"], :root a[href^="http://farm.plista.com/pets"], :root a[href^="https://windscribe.com/promo/"], :root [href^="/ucdownload.php"], :root a[href^="https://wantopticalfreelance.com/"], :root amp-embed[type="taboola"], :root a[href^="http://c43a3cd8f99413891.com/"], :root a[href^="https://trust.zone/go/r.php?RID="], :root div[data-ad-targeting], :root a[href^="https://trk.moviesflix4k.xyz/"], :root a[href^="https://trf.bannerator.com/"], :root a[href^="https://bestcond1tions.com/"], :root a[href^="http://go.247traffic.com/"], :root a[href^="https://trappist-1d.com/"], :root a[href^="http://anonymous-net.com/"], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root a[href^="https://vo2.qrlsx.com/"], :root a[href^="https://tracking.truthfinder.com/?a="], :root a[href^="https://tracking.gitads.io/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.interactivegf.com/"], :root a[href^="https://vlnk.me/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://track.healthtrader.com/"], :root a[href^="http://greensmoke.com/"], :root a[href^="https://track.effiliation.com/servlet/effi.click?"] > img, :root a[href^="https://track.clickmoi.xyz/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://control.trafficfabrik.com/"], :root a[href^="https://track.52zxzh.com/"], :root a[href^="http://www.greenmangaming.com/?tap_a="], :root a[href^="https://tm-offers.gamingadult.com/"], :root a[href^="https://t.hrtyj.com/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://squren.com/rotator/?atomid="], :root div[id^="ad-div-"], :root a[href^="https://secure.eveonline.com/ft/?aid="], :root [href^="https://mypillow.com/"] > img, :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root div[class^="pane-adsense-managed-"], :root a[href^="https://www.bang.com/?aff="], :root a[href^="https://secure.bstlnk.com/"], :root div[class^="index_displayAd_"], :root a[href^="http://adultgames.xxx/"], :root a[href^="http://semi-cod.com/clicks/"], :root a[href^="https://s.zlink2.com/"], :root div[class^="kiwi-ad-wrapper"], :root a[href^="https://rev.adsession.com/"], :root a[href^="https://someperceptionparade.com/"], :root a[href^="https://refpasrasw.world/"], :root div[data-google-query-id], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root a[href^="https://refpaexhil.top/"], :root a[href^="https://reachtrgt.com/"], :root [href^="http://advertisesimple.info/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root a[href^="https://queersodadults.com/"], :root div[id^="yandex_ad"], :root a[href^="https://www.hotgirls4fuck.com/"], :root a[href^="https://www.pornhat.com/"][rel="nofollow"], :root AD-SLOT, :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="http://www.my-dirty-hobby.com/?sub="], :root a[href^="https://porndeals.com/?track="], :root a[href^="https://pcm.bannerator.com/"], :root a[href^="https://offerforge.net/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://nutrientassumptionclaims.com/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://myusenet.xyz/"], :root a[href^="https://my-movie.club/"], :root a[href^="https://msecure117.com/"], :root [href^="https://detachedbates.com/"], :root a[href^="https://mk-cdn.net/"], :root a[href^="https://mk-ads.com/"], :root a[href^="https://meet-sex-here.com/?u="], :root a[href^="https://medleyads.com/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://lead1.pl/"], :root iframe[src^="https://tpc.googlesyndication.com/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="https://landing1.brazzersnetwork.com"], :root a[href^="http://adrunnr.com/"], :root a[href^="https://landing.brazzersplus.com/"], :root a[href^="https://land.rk.com/landing/"], :root a[href^="http://ad.au.doubleclick.net/"], :root a[href^="https://k2s.cc/pr/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="http://www.uniblue.com/cm/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://trusted-click-host.com/"], :root a[href^="https://members.linkifier.com/public/affiliateLanding?refCode="], :root a[href^="https://jmp.awempire.com/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root [href^="http://join.shemalepornstar.com/"], :root [id^="ad_sky"], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root a[href^="https://iac.ampxdirect.com/"], :root a[href^="https://horny-pussies.com/tds"], :root a[href^="https://graizoah.com/"], :root a[href^="https://goraps.com/"], :root a[href^="http://feedads.g.doubleclick.net/"], :root a[href^="https://redsittalvetoft.pro/"], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root a[href^="//thaudray.com/"], :root a[href^="http://cdn.adstract.com/"], :root a[href^="https://gogoman.me/"], :root a[href^="https://www.securegfm.com/"], :root a[href^="https://go.xxxjmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://torrentsafeguard.com/?aid="], :root [href^="https://v.investologic.co.uk/"], :root a[href^="https://offers.refchamp.com/"], :root a[href^="https://go.trkclick2.com/"], :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="http://vo2.qrlsx.com/"], :root a[href^="https://pl.premium4kflix.website/"], :root a[href^="https://go.julrdr.com/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://go.hpyjmp.com/"], :root a[href^="https://go.goasrv.com/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://go.gldrdr.com/"], :root a[href^="https://fleshlight.sjv.io/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.currency.com/"], :root a[href^="https://track.afftck.com/"], :root a[href^="https://gohere.pl/"], :root a[href^="http://guideways.info/"], :root a[href^="https://go.cmrdr.com/"], :root a[href^="http://www.easydownloadnow.com/"], :root [href^="http://www.pingperfect.com/aff.php"], :root a[href^="https://go.alxbgo.com/"], :root a[href^="https://go.admjmp.com/"], :root a[href^="https://go.ad2up.com/"], :root a[href^="https://giftsale.co.uk/?utm_"], :root a[href^="http://www.terraclicks.com/"], :root a[href^="https://gghf.mobi/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="http://adserver.adtech.de/"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://frameworkdeserve.com/"], :root a[href^="https://fonts.fontplace9.com/"], :root a[href^="http://clkmon.com/adServe/"], :root a[href^="https://flirtaescopa.com/"], :root bottomadblock, :root a[href^="https://fertilitycommand.com/"], :root a[href^="https://axdsz.pro/"], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://fakelay.com/"], :root a[href^="https://earandmarketing.com/"], :root [lazy-ad="leftthin_banner"], :root a[href^="https://dynamicadx.com/"], :root div[id^="div-gpt-"], :root a[href^="https://dooloust.net/"], :root a[href^="https://www.what-sexdating.com/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="//srv.buysellads.com/"], :root a[href^="https://dianches-inchor.com/"], :root a[href^="http://adf.ly/?id="], :root a[href^="https://uncensored3d.com/"], :root a[href^="https://creacdn.top-convert.com/"], :root a[href^="https://www.chngtrack.com/"], :root iframe[src^="https://pagead2.googlesyndication.com/"], :root a[href^="https://retiremely.com/"], :root a[href^="https://cpmspace.com/"], :root [onclick*="content.ad/"], :root a[href^="https://clixtrac.com/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root .commercial-unit-mobile-top > .v7hl4d, :root a[href^="https://click.plista.com/pets"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://chaturbate.xyz/"], :root [data-ad-cls], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://chaturbate.com/affiliates/"], :root #kt_player > a[target="_blank"], :root a[href^="https://camfapr.com/landing/click/"], :root a[href^="https://cagothie.net/"], :root a[href^="https://burpee.xyz/"], :root a[href^="https://mcdlks.com/"], :root a[href^="https://bs.serving-sys.com"], :root a[href^="http://www.123-reg.co.uk/affiliate2.cgi"], :root a[href^="https://bongacams10.com/track?"], :root a[href^="https://blackorange.go2cloud.org/"], :root a[href^="https://affiliates.bet-at-home.com/processing/"], :root a[href^="https://ads.ad4game.com/"], :root a[href^="https://betway.com/"][href*="&a="], :root a[href^="https://awptjmp.com/"], :root a[href^="http://www.fleshlight.com/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="http://www.1clickdownloader.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="https://awentw.com/"], :root [href^="/ucdownloader.php"], :root a[href^="https://awejmp.com/"], :root a[href^="https://ausoafab.net/"], :root a[href^="https://as.sexad.net/"], :root a[href^="https://playuhd.host/"], :root a[href^="https://as.conjectwatson.com/"], :root a[href^="http://bestorican.com/"], :root a[href^="https://galaxyroms.net/?scr="], :root a[href^="https://albionsoftwares.com/"], :root a[href^="http://cdn3.adexprts.com/"], :root a[href^="https://spygasm.com/track?"], :root a[href^="https://agacelebir.com/"], :root a[href^="https://geniusdexchange.com/"], :root a[href^="//postlnk.com/"], :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root [data-role="tile-ads-module"], :root a[href^="https://affiliate.geekbuying.com/gkbaffiliate.php?"], :root [href^="https://www.reimageplus.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="http://www.twinplan.com/AF_"], :root a[href^="https://affcpatrk.com/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="http://adultfriendfinder.com/p/register.cgi?pid="], :root a[href^="http://www.advcashpro.com/aff/"], :root a[href^="https://www.popads.net/users/"], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root a[href^="https://adswick.com/"], :root ADS-RIGHT, :root a[href^="https://tracking.trackcasino.co/"], :root a[href^="https://adserver.adreactor.com/"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://ads.cdn.live/"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="https://refpaano.host/"], :root a[href^="https://meet-to-fuck.com/tds"], :root a[href^="https://adhealers.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="http://servicegetbook.net/"], :root a[href^="https://bngpt.com/"], :root a[href^="http://clickandjoinyourgirl.com/"], :root a[href^="https://ad13.adfarm1.adition.com/"], :root a[href^="https://misspkl.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="http://zevera.com/afi.html"], :root a[href^="http://go.oclaserver.com/"], :root a[href^="https://ad.atdmt.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root .trc_rbox .syndicatedItem, :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://aaucwbe.com/"], :root a[href^="https://a.montangop.top/"], :root a[href^="http://campaign.bharatmatrimony.com/track/"], :root a[href^="https://a-ads.com/campaigns/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://a-ads.com/?partner="], :root a[href^="http://hyperlinksecure.com/go/"], :root a[href^="https://track.themadtrcker.com/"], :root a[href^="https://bullads.net/get/"], :root a[href^="http://down1oads.com/"], :root a[href^="http://yads.zedo.com/"], :root [href^="http://go.cm-trk2.com/"], :root a[href^="https://tracking.comfortclick.eu/"], :root a[href^="https://maymooth-stopic.com/"], :root a[href^="http://xtgem.com/click?"], :root a[href^="https://ads.trafficpoizon.com/"], :root div[class^="local-feed-banner-ads"], :root a[href^="http://wxdownloadmanager.com/dl/"], :root a[href^="http://www.xmediaserve.com/"], :root a[href^="http://www.webtrackerplus.com/"], :root a[href^="http://www.usearchmedia.com/signup?"], :root a[href^="http://www.torntv-downloader.com/"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="http://www.tirerack.com/affiliates/"], :root a[href^="http://www.text-link-ads.com/"], :root a[href^="https://weedzy.co.uk/"][href*="&utm_"], :root a[href^="http://www.streamtunerhd.com/signup?"], :root a[href^="http://www.streamate.com/exports/"], :root a[href^="https://ads-for-free.com/click.php?"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href^="http://www.socialsex.com/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://awbbjmp.com/"], :root a[href^="http://www.sfippa.com/"], :root a[href^="http://secure.signup-page.com/"], :root a[href^="http://www.quick-torrent.com/download.html?aff"], :root a[href^="http://www.plus500.com/?id="], :root a[href^="http://ffxitrack.com/"], :root a[href^="https://www.im88trk.com/"], :root [href*=".zlinkm.com/"], :root a[href^="http://www.pinkvisualgames.com/?revid="], :root a[href^="https://trklvs.com/"], :root a[href^="http://www.paddypower.com/?AFF_ID="], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href^="http://www.onclickmega.com/jump/next.php?"], :root a[href^="https://go.247traffic.com/"], :root a[href^="http://www.freefilesdownloader.com/"], :root a[href^="http://www.mysuperpharm.com/"], :root a[href^="http://www.myfreepaysite.com/sfw.php?aid"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="http://bcntrack.com/"], :root a[href^="http://www.securegfm.com/"], :root a[href^="http://www.liversely.net/"], :root a[href^="https://partners.fxoro.com/click.php?"], :root a[href^="https://azpresearch.club/"], :root a[href^="http://www.linkbucks.com/referral/"], :root a[href^="http://www.idownloadplay.com/"], :root a[href^="http://www.hitcpm.com/"], :root a[href^="http://fusionads.net"], :root a[href^="http://www.hibids10.com/"], :root div[class^="awpcp-random-ads"], :root a[href^="http://www.graboid.com/affiliates/"], :root a[href^="http://www.getyourguide.com/?partner_id="], :root a[href^="http://www.gamebookers.com/cgi-bin/intro.cgi?"], :root a[href^="http://www.friendlyquacks.com/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="http://www.firstload.com/affiliate/"], :root a[href^="http://www.friendlyadvertisements.com/"], :root a[href^="http://ul.to/ref/"], :root a[href^="https://content.oneindia.com/www/delivery/"], :root a[href^="http://www.fpcTraffic2.com/blind/in.cgi?"], :root a[href^="http://www.fonts.com/BannerScript/"], :root [href^="https://www.restoro.com/"], :root a[href^="https://americafirstpolls.com/"], :root a[href^="http://clickserv.sitescout.com/"], :root a[href^="http://www.firstload.de/affiliate/"], :root a[href^="http://www.dealcent.com/register.php?affid="], :root a[data-url^="http://paid.outbrain.com/network/redir?"], :root iframe[id^="google_ads_frame"], :root a[href^="http://www.bet365.com/"][href*="affiliate="], :root a[href^="http://www.bluehost.com/track/"] > img, :root a[href^="http://www.coiwqe.site/"], :root a[href^="https://click.a-ads.com/"], :root a[href^="http://www.clkads.com/adServe/"], :root a[href^="http://www.babylon.com/welcome/index?affID"], :root .grid > .container > #aside-promotion, :root a[href^="http://www.badoink.com/go.php?"], :root a[href^="http://www.afgr3.com/"], :root a[href^="https://fast-redirecting.com/"], :root a[href^="https://bluedelivery.pro/"], :root [href^="http://join.michelle-austin.com/"], :root a[href^="http://www.sexgangsters.com/?pid="], :root a[href^="http://www.amazon.co.uk/exec/obidos/external-search?"], :root a[href^="http://c.jumia.io/"], :root a[href^="http://www.affiliates1128.com/processing/"], :root a[href^="http://go.ad2up.com/"], :root a[href^="https://badoinkvr.com/"], :root a[href^="http://www.adxpansion.com"], :root a[href^="http://ad-emea.doubleclick.net/"], :root a[href^="https://clickadilla.com/"], :root .ob_container .item-container-obpd, :root a[href^="http://websitedhoome.com/"], :root a[href^="http://www.adskeeper.co.uk/"], :root a[href^="http://www.down1oads.com/"], :root a[href^="http://www.FriendlyDuck.com/"], :root a[href^="http://webtrackerplus.com/"], :root a[href^="http://web.adblade.com/"], :root [href^="https://stvkr.com/"], :root a[href^="http://engine.newsmaxfeednetwork.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="http://s9kkremkr0.com/"], :root a[href^="https://traffdaq.com/"], :root a[href^="http://ucam.xxx/?utm_"], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="https://dediseedbox.com/clients/aff.php?"], :root [href^="/ucmini.php"], :root a[href^="http://www.wantstraffic.com/"], :root a[href^="http://databass.info/"], :root a[href^="http://track.afcpatrk.com/"], :root div[class^="Ad__container"], :root a[href^="http://adprovider.adlure.net/"], :root a[href^="http://t.wowtrk.com/"], :root a[href^="http://tezfiles.com/pr/"], :root [id*="ScriptRoot"], :root a[href^="http://fileboom.me/pr/"], :root a[href^="//coarsewary.com/"], :root a[href*=".trust.zone"], :root a[href^="http://www.firstclass-download.com/"], :root a[href^="http://tracking.deltamediallc.com/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root div[class^="adUnit_"], :root a[href^="https://deliver.tf2www.com/"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href^="http://spygasm.com/track?"], :root a[href^="http://sharesuper.info/"], :root a[href^="https://awecrptjmp.com/"], :root [data-ez-name], :root a[href^="http://server.cpmstar.com/click.aspx?poolid="], :root a[href^="http://www.fbooksluts.com/"], :root a[href^="http://c.actiondesk.com/"], :root a[href^="http://intent.bingads.com/"], :root a[href^="http://www.cdjapan.co.jp/aff/click.cgi/"], :root .trc_related_container div[data-item-syndicated="true"], :root a[href^="https://www.firstload.com/affiliate/"], :root a[href^="http://see.kmisln.com/"], :root a[href^="http://secure.hostgator.com/~affiliat/"], :root a[href^="http://rs-stripe.wsj.com/stripe/redirect"], :root a[href^="http://refpaano.host/"], :root a[data-oburl^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="http://refpa.top/"], :root a[href^="https://easygamepromo.com/ef/custom_affiliate/"], :root a[href^="http://record.betsafe.com/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href*=".medgoodfood.com/"], :root a[href^="http://buysellads.com/"], :root a[href^="http://reallygoodlink.freehookupaffair.com/"], :root a[href^="https://keep2share.cc/pr/"], :root a[href^="http://pityhostngco2.xyz/"], :root a[href^="http://adlev.neodatagroup.com/"], :root a[href^="http://reallygoodlink.extremefreegames.com/"], :root a[href^="https://bnsjb1ab1e.com/"], :root a[href^="http://pwrads.net/"], :root a[href^="https://www.xvinlink.com/?a_fid="], :root a[href^="http://promos.bwin.com/"], :root a[href^="http://z1.zedo.com/"], :root a[href^="http://pokershibes.com/index.php?ref="], :root [id^="google_ads_iframe"], :root a[href^="http://partners.etoro.com/"], :root [data-mobile-ad-id], :root LEADERBOARD-AD, :root a[href^="http://papi.mynativeplatform.com:80/pub2/"], :root a[href^="http://searchtabnew.com/"], :root div[id^="ad-gpt-"], :root a[href^="http://pan.adraccoon.com?"], :root a[href^="http://online.ladbrokes.com/promoRedirect?"], :root a[href^="https://dltags.com/"], :root a[href^="http://onclickads.net/"], :root a[href^="http://mmo123.co/"], :root a[href^="https://fileboom.me/pr/"], :root a[href^="http://marketgid.com"], :root a[href^="https://aff-ads.stickywilds.com/"], :root a[href^="http://www.bitlord.me/share/"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="//pubads.g.doubleclick.net/"], :root a[href^="http://lp.ncdownloader.com/"], :root [href*=".engine.adglare.net/"], :root a[href^="http://allaptair.club/"], :root a[href^="https://moneynow.one/"], :root a[href^="http://look.djfiln.com/"], :root a[href^="https://track.trkinator.com/"], :root div[id^="ad-position-"], :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"], :root a[href^="http://liversely.com/"], :root a[href^="http://keep2share.cc/pr/"], :root a[href^="https://webroutetrk.com/"], :root a[href^="http://k2s.cc/code/"], :root a[href^="http://www.liutilities.com/"], :root a[href^="http://www.dl-provider.com/search/"], :root [href^="http://join.shemalesfromhell.com/"], :root .pubexchange_module .pe-external, :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://join3.bannedsextapes.com/track/"], :root a[href^="https://gamescarousel.com/"], :root a[href^="http://istri.it/?"], :root a[href^="http://mob1ledev1ces.com/"], :root a[href^="//voyeurhit.com/cs/"], :root a[href^="http://hd-plugins.com/download/"], :root [data-desktop-ad-id], :root a[href^="https://look.utndln.com/"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://ovb.im/"], :root a[href^="https://watchmygirlfriend.tv/"], :root .nrelate .nr_partner, :root a[href^="http://go.xtbaffiliates.com/"], :root a[href^="http://secure.cbdpure.com/aff/"], :root a[href^="http://www.downloadthesefiles.com/"], :root a[href^="https://oackoubs.com/"], :root a[href^="http://install.securewebsiteaccess.com/"], :root a[href^="http://www.revenuehits.com/"], :root a[href^="http://www.downloadweb.org/"], :root a[href^="http://go.seomojo.com/tracking202/"], :root a[href^="http://go.mobisla.com/"], :root a[href^="http://go.fpmarkets.com/"], :root a[href^="http://findersocket.com/"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root a[href*=".incontro-veloce.com/"], :root a[href^="http://g1.v.fwmrm.net/ad/"], :root a[href^="http://us.marketgid.com"], :root a[href^="http://imads.integral-marketing.com/"], :root a[href^="http://freesoftwarelive.com/"], :root a[href^="http://adtrackone.eu/"], :root span[title="Ads by Google"], :root a[href^="http://finaljuyu.com/"], :root a[href^="http://ethfw0370q.com/"], :root [id^="bunyad_ads_"], :root a[href^="http://elitefuckbook.com/"], :root a[href^="http://eclkmpsa.com/"], :root a[href^="http://wopertific.info/"], :root a[href^="http://earandmarketing.com/"], :root div[class^="hp-ad-rect-"], :root a[href^="http://dwn.pushtraffic.net/"], :root a[href^="http://aflrm.com/"], :root a[href^="http://deloplen.com/"], :root #content > #center > .dose > .dosesingle, :root a[href^="//edgar2al2larngpoer.com/"], :root a[href^="http://d2.zedo.com/"], :root amp-fx-flying-carpet, :root a[href^="http://czotra-32.com/"], :root a[href^="https://a.adtng.com/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root a[href^="http://codec.codecm.com/"], :root a[href^="https://www.travelzoo.com/oascampaignclick/"], :root a[href^="https://see.kmisln.com/"], :root a[href^="http://refer.webhostingbuzz.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="http://www.downloadplayer1.com/"], :root a[href^="http://clicks.binarypromos.com/"], :root [id^="ad_slider"], :root a[href^="http://chaturbate.com/affiliates/"], :root a[href^="https://track.bruceads.com/"], :root a[href^="https://t.aslnk.link/"], :root a[href^="https://m.do.co/c/"] > img, :root a[href^="http://track.trkvluum.com/"], :root a[href^="http://amzn.to/"] > img[src^="data"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href^="http://bs.serving-sys.com/"], :root a[href^="http://cpaway.afftrack.com/"], :root a[href^="http://cdn.adsrvmedia.net/"], :root [href^="https://infinitytrk.com/"], :root [lazy-ad="top_banner"], :root a[href^="http://360ads.go2cloud.org/"], :root [onclick^="location.href='http://www.reimageplus.com"], :root a[href^="http://dftrck.com/"], :root a[href^="http://casino-x.com/?partner"], :root a[href^="https://meet-sexhere.com/"], :root a[href^="http://record.sportsbetaffiliates.com.au/"], :root a[href^="http://campeeks.com/"][href*="&utm_"], :root a[href^="http://download-performance.com/"], :root a[href^="http://www.on2url.com/app/adtrack.asp"], :root [href^="https://affect3dnetwork.com/track/"], :root a[href^="http://campaign.bharatmatrimony.com/cbstrack/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="http://serve.williamhill.com/promoRedirect?"], :root a[href^="https://uncensored.game/"], :root a[href^="http://wgpartner.com/"], :root a[href^="http://bodelen.com/"], :root a[href^="http://www.seekbang.com/cs/"], :root a[href^="http://syndication.exoclick.com/"], :root a[href^="http://bluehost.com/track/"], :root [href^="https://www.dcpodj3k5.com/"], :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="http://enter.anabolic.com/track/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="http://banners.victor.com/processing/"], :root div[aria-label="Ads"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="http://axdsz.pro/"], :root a[href^="http://api.content.ad/"], :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href^="http://affiliates.lifeselector.com/"], :root a[href^="https://leg.xyz/?track="], :root a[href^="http://affiliate.glbtracker.com/"], :root [href^="https://t.ajrkm.link/"], :root a[href^="http://affiliate.coral.co.uk/processing/"], :root a[href^="http://aff.ironsocket.com/"], :root a[href^="http://tour.mrskin.com/"], :root a[href^="http://linksnappy.com/?ref="], :root a[href^="http://adtrack123.pl/"], :root a[href^="http://adsrv.keycaptcha.com"], :root a[href^="http://adserver.adreactor.com/"], :root div[class^="StickyHeroAdWrapper-"], :root a[href^="http://cwcams.com/landing/click/"], :root a[href^="http://ads.betfair.com/redirect.aspx?"], :root a[href^="http://ad.doubleclick.net/"], :root [href^="http://homemoviestube.com/"], :root a[href^="https://adsrv4k.com/"], :root a[href^="http://trk.mdrtrck.com/"], :root [href^="http://globsads.com/"], :root [href^="https://shrugartisticelder.com"], :root a[href^="https://scurewall.co/"], :root [name^="google_ads_iframe"], :root [href^="http://join.rodneymoore.com/"], :root [id*="MarketGid"], :root a[href^="http://espn.zlbu.net/"], :root a[href^="http://admrotate.iplayer.org/"], :root a[href^="http://adclick.g.doubleclick.net/"], :root a[href^="http://www.flashx.tv/downloadthis"], :root .vid-present > .van_vid_carousel__padding, :root #header + #content > #left > #rlblock_left, :root a[href^="http://affiliates.pinnaclesports.com/processing/"], :root a[href^="http://ad.yieldmanager.com/"], :root [data-dynamic-ads], :root a[href^="http://srvpub.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root a[href^="http://secure.vivid.com/track/"], :root a[href^="http://see-work.info/"], :root a[href^="https://www.passeura.com/"], :root a[href^="http://www.pinkvisualpad.com/?revid="], :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="//lambingsyddir.com/"], :root aside[id^="tn_ads_widget-"], :root a[href^="https://track.totalav.com/"], :root [href^="https://wct.link/"], :root a[href^="https://secure.adnxs.com/clktrb?"], :root div[data-mpu1], :root a[href^="http://adserver.adtechus.com/"], :root a[href^="http://www.download-provider.org/"], :root a[href^="http://play4k.co/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root a[href^="http://www.roboform.com/php/land.php"], :root a[href="//rufflycouncil.com/"], :root a[href*=".zlink9.com/"], :root a[href^="http://hotcandyland.com/partner/"], :root a[href^="http://www.mobileandinternetadvertising.com/"], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="http://affiliates.score-affiliates.com/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://ptapjmp.com/"], :root a[href^="https://ttf.trmobc.com/"], :root a[href^="http://n.admagnet.net/"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://go.onclasrv.com/"], :root a[href^="http://wct.link/"], :root a[href^="https://zononi.com/"], :root a[href^="http://adserving.unibet.com/"], :root [href^="https://bulletprofitsmartlink.com/"], :root [href^="https://join3.bannedsextapes.com"], :root a[href^="//benoopto.com/"], :root [lazy-ad="leftbottom_banner"], :root [id^="div-gpt-ad"], :root a[href^="https://intrev.co/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root [lazy-ad="lefttop_banner"], :root a[href^="http://c.ketads.com/"], :root a[href^="https://secure.starsaffiliateclub.com/C.ashx?"], :root [href^="https://totlnkcl.com/"], :root .trc_rbox_div .syndicatedItemUB, :root [href^="https://zone.gotrackier.com/"], :root [href^="https://www.mypillow.com/"] > img, :root [href^="https://freecourseweb.com/"] > .sitefriend, :root [href^="https://www.hostg.xyz/aff_c"] > img, :root a[href^="https://topoffers.com/"][href*="/?pid="], :root a[href^="https://syndication.dynsrvtbg.com/"], :root a[href^="http://vinfdv6b4j.com/"], :root div[data-test-id="AdBannerWrapper"], :root div[class^="AdCard_"], :root a[href^="http://www.urmediazone.com/signup"], :root a[href^="http://click.plista.com/pets"], :root a[href^="https://www.awin1.com/cread.php?awinaffid="], :root a[href^="https://servedbyadbutler.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://mob1ledev1ces.com/"], :root a[href^="https://promo-bc.com/"], :root a[data-redirect^="http://paid.outbrain.com/network/redir?"], :root a[href^="https://explore.findanswersnow.net/"], :root [id^="adframe_wrap_"], :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root a[href^="https://go.trackitalltheway.com/"], :root [data-template-type="nativead"], :root [href^="https://track.fiverr.com/visit/"] > img, :root [data-ad-manager-id], :root a[href^="http://ad-apac.doubleclick.net/"], :root a[href^="https://traffic.bannerator.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://mmwebhandler.aff-online.com/"], :root [href^="https://r.kraken.com/"], :root a[href^="http://xads.zedo.com/"], :root [class^="div-gpt-ad"], :root a[href^="http://www.ragazzeinvendita.com/?rcid="], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root .plistaList > .itemLinkPET, :root a[href^="http://www.adbrite.com/mb/commerce/purchase_form.php?"], :root a[href^="http://landingpagegenius.com/"], :root .section-subheader > .section-hotel-prices-header, :root [href^="http://join.ts-dominopresley.com/"], :root [href^="https://go.affiliatexe.com/"], :root a[href^="https://t.mobtya.com/"], :root a[href^="https://www.adxtro.com/"], :root [class*="__adv-block"], :root .trc_rbox_border_elm .syndicatedItem, :root a[href^="http://www.myfreepaysite.com/sfw_int.php?aid"], :root [href^="https://glersakr.com/"], :root a[href^="https://freeadult.games/"], :root a[href^="http://liversely.net/"], :root a[href^="http://mgid.com/"], :root a[href^="http://k2s.cc/pr/"], :root [href^="/admdownload.php"], :root a[href^="https://www.spyoff.com/"], :root div[data-native-ad], :root a[href^="https://click.hoolig.app/"], :root AD-TRIPLE-BOX, :root [href^="http://join.hardcoreshemalevideo.com/"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root a[href^="//www.mgid.com/"], :root [href^="https://go.astutelinks.com/"], :root [href^="http://join.shemale.xxx/"], :root a[href^="http://www.TwinPlan.com/AF_"], :root [href^="https://click2cvs.com/"], :root a[href^="http://ads.expekt.com/affiliates/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root .plista_widget_belowArticleRelaunch_item[data-type="pet"], :root a[href^="https://deliver.ptgncdn.com/"], :root [href^="https://www.targetingpartner.com/"], :root a[href^="http://latestdownloads.net/download.php?"], :root iframe[src^="http://ad.yieldmanager.com/"], :root a[href^="http://pubads.g.doubleclick.net/"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="http://hpn.houzz.com/"], :root a[href^="http://bc.vc/?r="], :root a[href^="http://www.afgr2.com/"], :root #slashboxes > .deals-rail, :root FBS-AD, :root [href^="https://go.4rabettraff.com/"], :root a[href^="https://ak.hetaruwg.com/"], :root a[href^="http://click.payserve.com/"], :root a[href^="http://s5prou7ulr.com/"], :root a[href^="http://azmobilestore.co/"], :root a[href^="https://sexsimulator.game/tab/?SID="], :root .rc-cta[data-target], :root a[href^="http://www.menaon.com/installs/"], :root a[href^="//syndication.dynsrvtbg.com/"], :root [href^="//mage98rquewz.com/"], :root [href^="https://mylead.global/stl/"] > img, :root div[id^="crt-"][style], :root a[href^="http://igromir.info/"], :root a[href^="http://affiliates.thrixxx.com/"], :root app-large-ad, :root a[href^="https://farm.plista.com/pets"], :root [id^="ad-wrap-"], :root a[href^="https://go.tmrjmp.com"], :root [data-css-class="dfp-inarticle"], :root a[href^="https://www.rabbits.webcam/?id="], :root a[href^="https://delivery.porn.com/"], :root [class^="Ad-adContainer"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join.girlsoutwest.com/"], :root a[href^="https://torguard.net/aff.php"] > img, :root [class^="AdvertisingSlot_"], :root [href^="http://trafficare.net/"], :root a[href^="http://ads.sprintrade.com/"], :root a[href^="https://trackjs.com/?utm_source"], :root AFS-AD, :root .trc_rbox_div .syndicatedItem, :root a[href^="//www.pd-news.com/"], :root a-ad, :root [href^="http://join.trannies-fuck.com/"], :root a[href^="http://1phads.com/"], :root a[href^="http://get.slickvpn.com/"], :root [data-ad-module], :root hl-adsense, :root div[data-contentexchange-widget], :root [id^="bunyad-widget-ads-"], :root a[href^="https://secure.cbdpure.com/aff/"], :root guj-ad, :root AMP-AD, :root a[href^="https://x.trafficandoffers.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root div[id^="vuukle-ad-"], :root a[href^="http://betahit.click/"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href^="http://goldmoney.com/?gmrefcode="], :root a[href^="http://fsoft4down.com/"], :root div[id^="ad_bigbox_"], :root #content > #right > .dose > .dosesingle, :root a[href^="http://paid.outbrain.com/network/redir?"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root [href^="https://affiliate.fastcomet.com/"] > img, :root .commercial-unit-mobile-top > div[data-pla="1"], :root [href^="https://traffserve.com/"], :root div[id^="amzn-assoc-ad"], :root a[href^="https://www.oboom.com/ref/"], :root a[href^="http://media.paddypower.com/redirect.aspx?"], :root a[href^="https://cpartner.bdswiss.com/"], :root #topstuff > #tads, :root a[href^="http://bcp.crwdcntrl.net/"], :root a[href^="http://stateresolver.link/"], :root a[href^="http://galleries.securewebsiteaccess.com/"], :root a[href^="https://ismlks.com/"], :root [data-freestar-ad], :root [class*="__adspot-title-container"], :root a[href^="https://a.bestcontentfood.top/"], :root #ads > .dose > .dosesingle { display: none !important; }</style></head>
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="https://adminlte.io/themes/v3/pages/charts/flot.html#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="https://adminlte.io/themes/v3/index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">Contact</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="https://adminlte.io/themes/v3/pages/charts/flot.html#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="https://adminlte.io/themes/v3/pages/charts/flot.html#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item">

                        <div class="media">
                            <img src="./AdminLTE 3 _ Flot Charts_files/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item">

                        <div class="media">
                            <img src="./AdminLTE 3 _ Flot Charts_files/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item">

                        <div class="media">
                            <img src="./AdminLTE 3 _ Flot Charts_files/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="https://adminlte.io/themes/v3/pages/charts/flot.html#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="https://adminlte.io/themes/v3/pages/charts/flot.html#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="https://adminlte.io/themes/v3/pages/charts/flot.html#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="https://adminlte.io/themes/v3/index3.html" class="brand-link">
            <img src="./AdminLTE 3 _ Flot Charts_files/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="./AdminLTE 3 _ Flot Charts_files/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div><div class="sidebar-search-results"><div class="list-group"><a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Widgets
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Layout Options
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/fixed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/fixed-topnav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/fixed-footer.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/layout/collapsed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link active">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Charts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/inline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/uplot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>uPlot</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                UI Elements
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/icons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/buttons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/sliders.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/modals.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Modals &amp; Alerts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/navbar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Navbar &amp; Tabs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/timeline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/UI/ribbons.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/tables/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/tables/data.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/tables/jsgrid.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/calendar.html" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/kanban.html" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Kanban Board
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/mailbox/read-mail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/invoice.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/profile.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/e-commerce.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/projects.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/project-add.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/project-edit.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/project-detail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/contacts.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/faq.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>FAQ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/contact-us.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact us</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Extras
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Login &amp; Register v1
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/login.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Login v1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/register.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Register v1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/forgot-password.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Forgot Password v1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/recover-password.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Recover Password v1</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Login &amp; Register v2
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/login-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Login v2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/register-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Register v2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/forgot-password-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Forgot Password v2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/examples/recover-password-v2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Recover Password v2</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/lockscreen.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/legacy-user-menu.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/language-menu.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/404.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/500.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/pace.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/examples/blank.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/starter.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-search"></i>
                            <p>
                                Search
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/search/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Simple Search</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/search/enhanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Enhanced</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">MISCELLANEOUS</li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/iframe.html" class="nav-link">
                            <i class="nav-icon fas fa-ellipsis-h"></i>
                            <p>Tabbed IFrame Plugin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                                Level 1
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Level 2
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Important</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/themes/v3/pages/charts/flot.html#" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </aside>

    <div class="content-wrapper" style="min-height: 1345.31px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Flot Charts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="https://adminlte.io/themes/v3/pages/charts/flot.html#">Home</a></li>
                            <li class="breadcrumb-item active">Flot</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Interactive Area Chart
                                </h3>
                                <div class="card-tools">
                                    Real time
                                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                        <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1544px; height: 300px;" width="1544" height="300"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1544px; height: 300px;" width="1544" height="300"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="28" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="175.94311770044192" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="327.86230961963383" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">20</text><text x="479.78150153882575" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">30</text><text x="631.7006934580177" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">40</text><text x="783.6198853772096" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">50</text><text x="935.5390772964015" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">60</text><text x="1087.4582692155934" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">70</text><text x="1239.3774611347853" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">80</text><text x="1391.2966530539773" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">90</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">80</text><text x="1" y="237.25" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="173.75" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">30</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">40</text><text x="1" y="110.25" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">50</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">60</text><text x="1" y="46.75" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">70</text></g></svg></div></div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Line Chart
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="line-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 744.5px; height: 300px;" width="744" height="300"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 744.5px; height: 300px;" width="744" height="300"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="37" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="140.03703703703704" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">2</text><text x="243.07407407407408" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">4</text><text x="346.1111111111111" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">6</text><text x="449.14814814814815" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">8</text><text x="548.2091109664352" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="651.2461480034722" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">12</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="1" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-1.5</text><text x="1" y="226.66666666666669" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-1.0</text><text x="1" y="184.33333333333334" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-0.5</text><text x="5.9765625" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">1.5</text><text x="5.9765625" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0.0</text><text x="5.9765625" y="99.66666666666667" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0.5</text><text x="5.9765625" y="57.333333333333336" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">1.0</text></g></svg></div></div>
                            </div>

                        </div>


                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Area Chart
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="area-chart" style="height: 338px; padding: 0px; position: relative;" class="full-width-chart"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 782.5px; height: 338px;" width="782" height="338"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 782.5px; height: 338px;" width="782" height="338"></canvas></div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Bar Chart
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 744.5px; height: 300px;" width="744" height="300"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 744.5px; height: 300px;" width="744" height="300"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="156.51819957386363" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="290.24857954545456" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="418.62642045454544" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="544.7654918323864" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="35.36936257102273" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="665.9548561789773" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.9521484375" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g></svg></div></div>
                            </div>

                        </div>


                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Donut Chart
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 744.5px; height: 300px;" width="744" height="300"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 744.5px; height: 300px;" width="744" height="300"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 69.5px; left: 430.203px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 209.5px; left: 408.203px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 128.5px; left: 249.203px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div></span></div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright © 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark" style="display: none;">

        <div class="p-3 control-sidebar-content" style=""><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option><a href="https://adminlte.io/themes/v3/pages/charts/flot.html#">clear</a></select></div></aside>

    <div id="sidebar-overlay"></div></div>


<script src="./AdminLTE 3 _ Flot Charts_files/jquery.min.js.indir"></script>

<script src="./AdminLTE 3 _ Flot Charts_files/bootstrap.bundle.min.js.indir"></script>

<script src="./AdminLTE 3 _ Flot Charts_files/adminlte.min.js.indir"></script>

<script src="./AdminLTE 3 _ Flot Charts_files/jquery.flot.js.indir"></script>

<script src="./AdminLTE 3 _ Flot Charts_files/jquery.flot.resize.js.indir"></script>

<script src="./AdminLTE 3 _ Flot Charts_files/jquery.flot.pie.js.indir"></script>

<script src="./AdminLTE 3 _ Flot Charts_files/demo.js.indir"></script>

<script>
    $(function () {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data        = [],
            totalPoints = 100

        function getRandomData() {

            if (data.length > 0) {
                data = data.slice(1)
            }

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y    = prev + Math.random() * 10 - 5

                if (y < 0) {
                    y = 0
                } else if (y > 100) {
                    y = 100
                }

                data.push(y)
            }

            // Zip the generated y values with the x values
            var res = []
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res
        }

        var interactive_plot = $.plot('#interactive', [
                {
                    data: getRandomData(),
                }
            ],
            {
                grid: {
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor: '#f3f3f3'
                },
                series: {
                    color: '#3c8dbc',
                    lines: {
                        lineWidth: 2,
                        show: true,
                        fill: true,
                    },
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    show: true
                },
                xaxis: {
                    show: true
                }
            }
        )

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()])

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw()
            if (realtime === 'on') {
                setTimeout(update, updateInterval)
            }
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
            update()
        }
        //REALTIME TOGGLE
        $('#realtime .btn').click(function () {
            if ($(this).data('toggle') === 'on') {
                realtime = 'on'
            }
            else {
                realtime = 'off'
            }
            update()
        })
        /*
         * END INTERACTIVE CHART
         */


        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
            cos = []
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)])
            cos.push([i, Math.cos(i)])
        }
        var line_data1 = {
            data : sin,
            color: '#3c8dbc'
        }
        var line_data2 = {
            data : cos,
            color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
            grid  : {
                hoverable  : true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor  : '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines     : {
                    show: true
                },
                points    : {
                    show: true
                }
            },
            lines : {
                fill : false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis : {
                show: true
            },
            xaxis : {
                show: true
            }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
            position: 'absolute',
            display : 'none',
            opacity : 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function (event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2)

                $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                    .css({
                        top : item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200)
            } else {
                $('#line-chart-tooltip').hide()
            }

        })
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
            [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
            [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
        $.plot('#area-chart', [areaData], {
            grid  : {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color     : '#00c0ef',
                lines : {
                    fill: true //Converts the line chart to area chart
                },
            },
            yaxis : {
                show: false
            },
            xaxis : {
                show: false
            }
        })

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
            bars: { show: true }
        }
        $.plot('#bar-chart', [bar_data], {
            grid  : {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor  : '#f3f3f3'
            },
            series: {
                bars: {
                    show: true, barWidth: 0.5, align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis : {
                ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
            }
        })
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
            {
                label: 'Series2',
                data : 30,
                color: '#3c8dbc'
            },
            {
                label: 'Series3',
                data : 20,
                color: '#0073b7'
            },
            {
                label: 'Series4',
                data : 50,
                color: '#00c0ef'
            }
        ]
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show       : true,
                    radius     : 1,
                    innerRadius: 0.5,
                    label      : {
                        show     : true,
                        radius   : 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        /*
         * END DONUT CHART
         */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
            + label
            + '<br>'
            + Math.round(series.percent) + '%</div>'
    }
</script>


<div class="tooltip-inner" id="line-chart-tooltip" style="position: absolute; opacity: 0.8; top: 839px; left: 589px;">undefined of 5.00 = -0.96</div></body></html>