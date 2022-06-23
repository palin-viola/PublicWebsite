<?php

namespace main\webapp\php;

class RackTrackSite
{
    public string $favIcon = "images/favicon.png";
    public string $title = "Rack Track - Home";
    public string $description = "Rack Track is an Inventory Management system that enables the ability to get real time reports on any deployed device, anywhere.";
    public string $keywords = "Inventory Management system,cloud-based SaaS product,  geolocation/GPS location, Fast Global Search";
    public string $themeColor = "#df3311";
    public string $fontImport = "https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700;800&display=swap";
    public string $CSSLib = "css/main.css";
    public string $DeferJSLib = "js/main-bundle.js";

    public string $companyName = "Rack Track, Inc.";
    public string $companyAddress = "6709 Ridge Rd. Port Richey, FL 34668";
    public string $companyAddressLine1 = "6709 Ridge Rd.";
    public string $companyAddressLine2 = "Port Richey, FL 34668";
    public string $companyEmail = "corporate@rack-track.com";
    public string $companyTel = "(833) 722-5875";
    public string $companySupportEmail = "support@rack-track.com";
    public string $companySupportTel = "(833) RACK-TRK";
    public string $companySalesTel = "(707) RACK-TRK";
    public string $companySalesTel2 = "(707) 722-5875";
    public string $companySalesTel3 = "(813)-345-2700";
    public string $login = "https://aws.rack-track.com/a/login.do";
    public string $signup = "https://aws.rack-track.com/a/signup.do";

    //footer lib
    public string $copyrightYearStart = "2022";
    public string $facebook = "https://www.facebook.com/RackTrack";
    public string $twitter = "https://twitter.com/RackTrack";

    public array $homePage = array(
        'text' => array( 0 => "Home"),
        'ariaLabel' => array( 0 => "Go to Rack Track home page"),
        'href' => array( 0 => "index.php"),
        'svgIco' => array( 0 => '<svg xmlns="http://www.w3.org/2000/svg" class="svg-inline" viewBox="0 0 200 62" aria-label="Go to Rack Track home page"><path id="RTLogoText" d="M71.6 38h-3.8l-2.4-4.7h-1.5V38h-3.8V24h8.2c1.8 0 2.7.9 2.7 2.7v3.6c0 1.5-.6 2.4-1.9 2.7l2.5 5zm-4.7-7.6c.3 0 .4-.1.4-.4v-2.6c0-.3-.1-.4-.4-.4h-3v3.3l3 .1zm15.9 4.7h-4.1l-.8 2.9H74l4.2-14h5l4.3 14h-4l-.7-2.9zm-.8-3L80.7 27l-1.3 5.1H82zm8.3 3.2v-8.6c0-1.8.9-2.7 2.8-2.7h5.3c1.8 0 2.7.9 2.7 2.7v2.6h-3.8v-1.9c0-.3-.1-.4-.4-.4h-2.5c-.3 0-.4.1-.4.4v7c0 .3.1.4.4.4H97c.3 0 .4-.1.4-.4v-1.9h3.8v2.6c0 1.8-.9 2.7-2.7 2.7H93c-1.8.2-2.7-.7-2.7-2.5m22.8 2.7-2.4-5.5-2 2.8V38H105V24h3.7v6.4l4.1-6.4h4.1l-3.8 5.4 4.1 8.7-4.1-.1zm16.3-10.8h-3.5V24h10.8v3.2h-3.5V38h-3.8V27.2zM151.8 38H148l-2.4-4.7h-1.5V38h-3.8V24h8.2c1.8 0 2.7.9 2.7 2.7v3.6c0 1.5-.6 2.4-1.9 2.7l2.5 5zm-4.7-7.6c.3 0 .4-.1.4-.4v-2.6c0-.3-.1-.4-.4-.4h-3v3.3l3 .1zm15.8 4.7h-4.1l-.7 2.9h-3.9l4.2-14h5l4.3 14h-4l-.8-2.9zm-.7-3-1.3-5.1-1.3 5.1h2.6zm8.3 3.2v-8.6c0-1.8.9-2.7 2.8-2.7h5.4c1.8 0 2.7.9 2.7 2.7v2.6h-3.8v-1.9c0-.3-.1-.4-.4-.4h-2.5c-.3 0-.4.1-.4.4v7c0 .3.1.4.4.4h2.5c.3 0 .4-.1.4-.4v-1.9h3.8v2.6c0 1.8-.9 2.7-2.7 2.7h-5.4c-1.9.2-2.8-.7-2.8-2.5m22.8 2.7-2.4-5.5-2 2.8V38h-3.7V24h3.7v6.4L193 24h4.1l-3.9 5.4 4.1 8.7-4-.1z" /><path id="RTLogoIco" d="M23.1 17.8h-7.4c-14.5.2-17 19-6.6 26.7l16 16 5.5-5.5-17.9-19c-2.9-3.7-.3-9.1 4.4-9.1h6c6.1 0 6-9.1.1-9.1M35.2 28.7c-2.2 4-6.3 6.7-10.9 7l12 13.2c31.3-23.7-.5-63.8-28.4-40.2h15.2c10.3.5 17.1 11.1 12.1 20"/></svg>')
    );

    public array $aboutPage = array(
        'text' => array( 0 => "About"),
        'ariaLabel' => array( 0 => "Rack Track Home Page"),
        'href' => array( 0 => "index.php")
    );

    public array $featuresPage = array(
        'text' => array( 0 => "Features"),
        'ariaLabel' => array( 0 => "Rack Track Features"),
        'href' => array( 0 => "modules/index.php"),
        'introduction' => array( 0 => "The product allows for <b>intelligent discovery of devices configurations of network devices,</b> and inventories."),
        'svgIco' => array( 0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path id="tick" d="m11.8 17.1-2.7-2.7c-.1-.1-.1-.1 0-.2l.7-.7c.1-.1.1-.1.2 0l1.8 1.8c.1.1.1.1.2 0l4-4.2c.1-.1.1-.1.2 0l.7.7c.1.1.1.1 0 .2L12 17.1h-.2"/><path id="star" d="m5 25.3 1.5-8.9L0 10.1l9-1.3 4-8.1 4 8.1 9 1.3-6.5 6.3 1.5 8.9-8-4.2-8 4.2zm8-5.5 6.5 3.4-1.3-7.2 5.2-5.1-7.2-1.1L13 3.3 9.8 9.8l-7.2 1.1L7.8 16l-1.2 7.2 6.4-3.4z"/></svg>')
    );

    public array $faqPage = array(
        'text' => array( 0 => "FAQ"),
        'ariaLabel' => array( 0 => "Frequently Asked Questions"),
        'href' => array( 0 => "faq.php")
    );

    public array $contactPage = array(
        'text' => array( 0 => "Contact"),
        'ariaLabel' => array( 0 => "Contact Rack Track"),
        'introduction' => array( 0 => "We want to hear from you. Let us know how we can help."),
        'href' => array( 0 => "contact.php")
    );

    public array $featuresMenuArray = array(
        'text' => array(0 => "Global Searching", 1 => "Regional Mapping", 2 => "Inventory Management", 3 => "Site Management", 4 => "Dashboard", 5 => "Custom Features"),
        'ariaLabel' => array(0 => "Global Searching", 1 => "Regional Mapping", 2 => "Inventory Management", 3 => "Site Management", 4 => "Dashboard", 5 => "Custom Features"),
        'content' => array(0 => "Provides easy device lookup with global inventory searching", 1 => "Keep track of where assets are being allocated", 2 => "Keep track of what is going on with regional devices", 3 => "Detailed reports on deployed equipment with real-time statistics", 4 => "Detailed reports on deployed equipment with real-time statistics", 5 => "Allow us to create your custom solutions!"),
        'menuId' => array(0 => "globalSearching", 1 => "regionalMapping", 2 => "inventoryManagement", 3 => "siteManagement", 4 => "Dashboard", 5 => "customFeatures"),
        'href' => array(0 => "modules/global-searching.php", 1 => "modules/regional-mapping.php", 2 => "modules/inventory-management.php", 3 => "modules/site-management.php", 4 => "modules/dashboard.php", 5 => "modules/custom-features.php"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="m22.9 20.4-5.7-4.7.9 7.4 1.7-1 1.6 2.9 1.4-.8-1.6-2.8z"/><path class="icoLink" d="M17.1 21.6c-.4.2-.8.3-1.3.5l1.2-1.2-.2-1.8c-.8 1.3-1.9 2.3-3.2 3.1v-4.8c1.1.1 2.1.3 3.1.7l-.2-1.3c-.9-.3-1.9-.5-2.9-.5V13h5.2c0 1-.2 1.9-.4 2.8l1 .8c.4-1.1.6-2.4.6-3.6h3.1c-.1 1.9-.8 3.7-1.8 5.2l.9.7c1.3-1.8 2.1-4.1 2.1-6.5 0-2.9-1.1-5.6-2.9-7.6l-.4-.5c-1.8-1.8-4.2-2.9-6.8-3.2h-2.5C9.2 1.4 6.9 2.5 5 4.3l-.4.4c-1.8 2-2.9 4.7-2.9 7.6 0 2.9 1.1 5.6 2.9 7.6l.4.4c1.8 1.8 4.2 2.9 6.8 3.2H14.3c1.1-.1 2.1-.4 3.1-.8l-.3-1.1zm6-9.9H20c-.1-1.8-.5-3.4-1.1-5 .6-.3 1.1-.7 1.6-1.2 1.5 1.7 2.5 3.9 2.6 6.2m-3.4-7c-.4.4-.9.7-1.3 1-.7-1.2-1.5-2.2-2.5-3.1 1.4.4 2.7 1.2 3.8 2.1m-6.1-2.3c1.5.9 2.8 2.3 3.7 3.9-1.1.5-2.4.8-3.7.9V2.4zm0 6c1.5-.1 2.9-.4 4.2-1 .6 1.3.9 2.8 1 4.4h-5.2V8.4zm-3.5-5.8c-1 .9-1.8 1.9-2.5 3.1-.5-.3-.9-.6-1.3-1 1.1-.9 2.4-1.7 3.8-2.1M5.5 5.5c.5.5 1 .9 1.6 1.3C6.4 8.3 6 10 6 11.7H2.9C3 9.4 4 7.2 5.5 5.5m-2.6 7.4H6c.1 1.8.5 3.4 1.1 5-.6.4-1.1.8-1.6 1.2C4 17.4 3 15.3 2.9 12.9m3.4 7c.4-.4.9-.7 1.3-1 .7 1.2 1.5 2.2 2.5 3.1a9.5 9.5 0 0 1-3.8-2.1m6.1 2.3c-1.5-.9-2.8-2.3-3.7-3.9 1.1-.5 2.4-.8 3.7-.9v4.8zm0-6c-1.5.1-2.9.4-4.2 1-.6-1.3-.9-2.8-1-4.4h5.2v3.4zm0-4.5H7.2c.1-1.6.4-3 1-4.4 1.3.6 2.7 1 4.2 1v3.4zm0-4.5c-1.3-.1-2.5-.4-3.7-.9.9-1.6 2.1-2.9 3.7-3.9v4.8z"/></svg>',
        1 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M22 22.4c-.2-.2-.4-.4-.6-.5-.5-.3-1.2-.5-2-.7-.9-.2-2-.4-3.2-.5l-.6.9c1.4.1 2.6.3 3.6.5.7.2 1.4.4 1.8.6.4.2.4.4.4.4 0 .1-.1.2-.4.4-.4.2-1 .5-1.8.6-1.6.4-3.8.6-6.1.6s-4.5-.2-6.1-.6c-.7-.2-1.4-.4-1.8-.6-.4-.2-.4-.4-.4-.4 0-.1.1-.2.4-.4.4-.2 1-.5 1.8-.6 1-.3 2.2-.4 3.6-.5l-.6-.9c-1.2.1-2.3.3-3.2.5-.9.2-1.5.5-2 .7-.4.1-.6.3-.8.5-.2.2-.3.5-.3.7s.1.5.3.7c.2.2.4.4.6.5.5.3 1.2.5 2 .7 1.7.4 3.9.6 6.3.6s4.6-.2 6.3-.6c.9-.2 1.5-.5 2-.7.3-.2.5-.3.6-.5.2-.2.3-.5.3-.7s.1-.5-.1-.7"/><path class="icoLink" d="M16.5 1c-.9-.5-1.9-.7-3-.8h-.8c-.5 0-1 .1-1.4.2-.5.1-1.1.3-1.6.5s-1 .5-1.4.8L7.1 2.9c-.4.4-.7.9-1 1.3-.3.5-.5 1-.7 1.5-.7 2-.6 4.1.2 6.1 0 .1.1.1.1.2 1.1 2.4 2.9 4.6 4.4 6.9.7 1 1.3 2 2 3 .2.4.4.6.5.8l.3.4c.9-1.4 1.8-2.7 2.7-4.1 2.1-3.2 5-6.2 5.3-10.2.3-3-1.4-6.3-4.4-7.8zM8.8 8c0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2-2.3.1-4.2-1.8-4.2-4.2zm6.3 11.1-1.2 1.8 1.2-1.8c2.1-3.2 5-6.2 5.3-10.2.2-3.1-1.6-6.4-4.5-7.9-.3-.1-.6-.3-.9-.4.3.1.6.2.9.4 2.9 1.5 4.7 4.8 4.5 7.9-.2 4-3.1 7.1-5.3 10.2zm-1.2 1.8z"/></svg>',
        2 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoLink" d="M17.5 10.1H11c-.4 0-.7.3-.7.7s.3.7.7.7h6.5c.4 0 .7-.3.7-.7s-.3-.7-.7-.7M8.1 10H5.9c-.3 0-.5.2-.5.5v2.7c0 .3.2.5.5.5h2.2c.3 0 .5-.2.5-.5v-2.7c0-.3-.2-.5-.5-.5m10.1 3.5c0-.4-.3-.7-.7-.7H11c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h6.5c.4 0 .7-.3.7-.7M4.3 18.6c-.3 0-.5-.2-.5-.5V8.9c0-.3.2-.5.5-.5h14c.3 0 .5.2.5.5V14l2.2-2.2V5.1c0-1.2-1-2.2-2.2-2.2h-15c-1.2 0-2.2 1-2.2 2.2v13.5c0 1.2 1 2.2 2.2 2.2h8.8c0-.4.2-.7.5-.9l.7-.7.5-.5h-10zM8.1 4.9h2.2c.4 0 .8.4.8.8s-.4.8-.8.8H8.1c-.4 0-.8-.4-.8-.8 0-.5.3-.8.8-.8m-3.2-.3c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1m.8 10.9c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h9.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H5.7z"/><path class="icoHighlight" d="m22.2 16.1-1.6-1.5c-.1-.1-.3-.1-.4 0l-4.3 4.3c-.1.1-.1.3 0 .4l1.5 1.6c.1.1.3.1.4 0l4.3-4.3c.2-.2.2-.4.1-.5m-7.3 4.2c-.1-.1-.3-.1-.4 0l-.5.5s-.1.1-.1.2l-.1 1.7c0 .2.1.3.3.3l1.7-.2c.1 0 .1 0 .2-.1l.5-.5c.1-.1.1-.3 0-.4l-1.6-1.5zm9.4-6.3-1.5-1.5c-.1-.1-.3-.1-.4 0l-.8.8c-.1.1-.1.3 0 .4l1.5 1.5c.1.1.3.1.4 0l.8-.8c.1-.1.1-.3 0-.4"/></svg>',
        3 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoLink" d="M18.8 2.8H3.4c-1.2 0-2.2 1-2.2 2.2v13.7c0 1.2 1 2.2 2.2 2.2h15.4c1.2 0 2.2-1 2.2-2.2V5c0-1.2-1-2.2-2.2-2.2m-11 2H10c.5 0 .8.4.8.8 0 .5-.4.8-.8.8H7.8c-.4 0-.8-.4-.8-.8 0-.5.4-.8.8-.8m-3.3-.3c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1m14.3 13.7c0 .3-.2.5-.5.5H4c-.3 0-.5-.2-.5-.5V8.9c0-.3.2-.5.5-.5h14.3c.3 0 .5.2.5.5v9.3z"/><path class="icoHighlight" d="M17 15.4h-.7c-.2 0-.4-.2-.5-.4-.1-.2-.2-.5-.3-.7-.1-.2-.1-.4.1-.6l.5-.5c.2-.2.2-.5 0-.7l-.7-.7c-.2-.2-.5-.2-.7 0l-.7.4c-.2.2-.4.2-.6.1-.2-.1-.5-.2-.7-.3-.2-.1-.4-.3-.4-.5v-.7c0-.3-.2-.5-.5-.5h-1c-.3 0-.5.2-.5.5v.7c0 .2-.2.4-.4.5-.2.1-.5.2-.7.3-.2.1-.4.1-.6-.1l-.5-.5c-.2-.2-.5-.2-.7 0l-.7.7c-.2.2-.2.5 0 .7l.5.5c.2.2.2.4.1.6-.2.3-.3.5-.3.8-.1.2-.3.4-.5.4h-.8c-.3 0-.5.2-.5.5v1c0 .3.2.5.5.5H9c-.1-.3-.2-.7-.2-1 0-1.4 1.1-2.6 2.6-2.6s2.6 1.1 2.6 2.6c0 .4-.1.7-.2 1H17c.3 0 .5-.2.5-.5v-1c0-.3-.3-.5-.5-.5"/></svg>',
        4 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M6.6 15.4c-.3.3-.3.7 0 1 .1.1.3.2.5.2s.4-.1.5-.2l2.8-2.8-1-1-2.8 2.8zM20 8l-2.2.3c-.3.1-.5.5-.2.7l.4.4-2.3 2-1.9-1.9c-.3-.3-.7-.3-1 0l-.5.5 2.9 2.9c.3.3.7.3 1 0l2.9-2.5.5.5c.3.3.7.1.7-.2l.3-2.2c-.1-.3-.3-.6-.6-.5"/><path class="icoLink" d="M21.7 18.5H5v-3.3l4.3-4.3 6.2 6.2c.1.1.3.2.5.2s.3-.1.5-.2l3.1-2.7c.3-.3.3-.7.1-1-.3-.3-.7-.3-1-.1l-2.6 2.2-6.2-6.1c-.3-.3-.7-.3-1 0L5 13.2V6.7c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7v12.5c0 .4.3.7.7.7h17.4c.4 0 .7-.3.7-.7s-.3-.7-.7-.7"/></svg>',
        5 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M23.9 16c0-.1-.1-.2-.2-.2h-.5c-.2 0-.3-.2-.3-.3-.1-.3-.2-.5-.4-.8-.1-.1 0-.2 0-.3l.4-.4c.1-.1.1-.2 0-.3-.3-.4-.6-.7-1-1h-.1c-.1 0-.1 0-.2.1l-.4.4s-.1.1-.2.1h-.1c-.3-.2-.7-.3-1.1-.4V12c0-.1-.1-.2-.2-.2-.2 0-.5-.1-.7-.1-.2 0-.5 0-.7.1-.1 0-.2.1-.2.2v.7c-.4.1-.8.2-1.1.4h-.1c-.1 0-.1 0-.2-.1l-.4-.4s-.1-.1-.2-.1h-.1c-.4.3-.7.6-1 1-.1.1-.1.2 0 .3l.4.4c.1.1.1.2 0 .3-.1.2-.3.5-.3.8 0 .2-.2.3-.3.3h-.5c-.1 0-.2.1-.2.2 0 .2-.1.5-.1.7 0 .3 0 .5.1.7 0 .1.1.2.2.2h.5c.2 0 .3.2.3.3.1.3.2.5.3.8.1.1 0 .2 0 .3l-.4.4c-.1.1-.1.2 0 .3.3.4.6.7 1 1h.1c.1 0 .1 0 .2-.1l.4-.4s.1-.1.2-.1h.1c.3.2.7.4 1.1.4v.7c0 .1.1.2.2.2.2 0 .5.1.7.1.2 0 .5 0 .7-.1.1 0 .2-.1.2-.2v-.7c.4-.1.8-.2 1.1-.4h.1c.1 0 .1 0 .2.1l.4.4s.1.1.2.1h.1c.4-.3.7-.6 1-1 .1-.1.1-.2 0-.3l-.4-.2c-.1-.1-.1-.2 0-.3.1-.2.3-.5.4-.8 0-.2.2-.3.3-.3h.5c.1 0 .2-.1.2-.2 0-.2.1-.5.1-.7-.1-.3-.1-.5-.1-.7m-3.6.9c-.1.6-.6 1.1-1.1 1.1H19c-.8 0-1.5-.7-1.4-1.6.1-.6.6-1.1 1.1-1.1h.2c.8 0 1.5.8 1.4 1.6"/><path class="icoLink" d="M19.9 4.3H3.2c-.6 0-1.2.5-1.2 1.2V9c0 .6.5 1.2 1.2 1.2h16.7c.6 0 1.2-.5 1.2-1.2V5.4c0-.6-.5-1.1-1.2-1.1m-14.4 4c-.6 0-1.2-.5-1.2-1.2.1-.6.6-1.1 1.2-1.1s1.2.5 1.2 1.2c0 .6-.5 1.1-1.2 1.1m4.1 0c-.6 0-1.2-.5-1.2-1.2 0-.6.5-1.1 1.2-1.1.6 0 1.2.5 1.2 1.2-.1.6-.6 1.1-1.2 1.1m8.9-.4h-4.6c-.4 0-.7-.3-.7-.7 0-.4.3-.7.7-.7h4.6c.4 0 .7.3.7.7 0 .4-.3.7-.7.7m-16.4 5v3.5c0 .6.5 1.2 1.2 1.2h9.3c0-.3-.1-.6-.1-.8 0-.3 0-.6.1-1 .1-.6.5-1.1 1-1.3-.2-.5-.1-1.1.2-1.6.3-.4.6-.7 1-1.1H3.2c-.6 0-1.1.5-1.1 1.1m7.5.6c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2c-.6 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2m-4.1 0c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2c-.6 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2m6.8 5.8H4.4c-.5 0-.9.4-.9.9s.4.9.9.9h7.9c.5 0 .9-.4.9-.9-.1-.5-.4-.9-.9-.9"/></svg>'),
    );

    public array $featuresGlobalSearchMenuArray = array(
        'text' => array(0 => "Advanced Searching", 1 => "Quick Access"),
        'ariaLabel' => array(0 => "Advanced Searching Features", 1 => "Quick access to Devices"),
        'tabName' => array(0 => "advancedSearching", 1 => "quickAccess"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path class="icoLink" d="M8.9 5.9c0 1.1-.9 2-1.9 2-1.1 0-2-.9-2-2s.9-2 1.9-2h.3l1.1-1.1c-.4-.2-.9-.3-1.3-.3-1.9 0-3.4 1.5-3.4 3.4s1.5 3.4 3.3 3.4c1.8 0 3.3-1.5 3.3-3.4 0-.5-.1-.9-.3-1.3l-1 1.1v.2zm1.5 4.5c1.3-1 2.2-2.6 2.2-4.5 0-.6-.1-1.2-.3-1.8l-.3.3c-.2.2-.5.3-.8.3h-.1c.1.4.2.7.2 1.1 0 2.4-1.9 4.3-4.3 4.3S2.7 8.2 2.7 5.8 4.6 1.5 7 1.5c.4 0 .9.1 1.3.2 0-.3.1-.6.3-.8L9 .6C8.3.4 7.7.3 7 .3 3.9.3 1.4 2.8 1.4 5.9c0 1.9 1 3.6 2.5 4.7L2.8 13c-.1.3 0 .6.3.7h.2c.2 0 .4-.1.5-.3l.9-2.3c.6.3 1.2.4 1.9.5v1.7c0 .3.2.5.5.5s.5-.2.5-.5v-1.7c.7-.1 1.3-.3 1.9-.6l.9 2.5c.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7l-1-2.7z"/><path class="icoHighlight" d="m12.5 2.1-1-.4c-.1 0-.2-.1-.2-.2l-.4-1c-.1-.1-.2-.2-.3-.2-.1 0-.2 0-.2.1L9.2 1.6c-.1.1-.1.3-.1.4l.3.8-2 2.1c-.2-.1-.3-.1-.4-.1-.6 0-1.1.5-1.1 1.1S6.3 7 7 7c.6 0 1.1-.5 1.1-1.1 0-.1 0-.3-.1-.4l2-2 1 .4h.1c.1 0 .2 0 .2-.1l1.2-1.2c.3-.1.2-.4 0-.5z"/></svg>',
            1 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M19.4 14.7c-.5-.1-1 .1-1.4.4-.1-.5-.6-1-1.2-1.1-.5-.1-1 .1-1.4.4-.2-.5-.7-1-1.3-1-.5-.1-1.2.2-1.5.6V9.9c0-.6-.3-1.1-.9-1.3-.9-.3-1.7.4-1.7 1.2v10.5c-.7 0-1.3-.6-1.3-1.3v-1.2c0-.3-.2-.5-.5-.5h-.3c-1 0-1.8.8-1.8 1.8v3.2c0 .6.2 1.1.7 1.5l1.8 1.5c.4.3.8.5 1.3.5h7.3c.5 0 1-.2 1.4-.6l1.5-1.5c.4-.4.6-.9.6-1.4V16c-.2-.6-.6-1.2-1.3-1.3z"/><path class="icoLink" d="M10.3 4.8H9c-.2 0-.3.1-.3.3v1.3c0 .2.1.3.3.3h1.3c.2 0 .3-.1.3-.3V5.1c0-.2-.1-.3-.3-.3zm3.3 0h-1.3c-.2 0-.3.1-.3.3v1.3c0 .2.1.3.3.3h1.3c.2 0 .3-.1.3-.3V5.1c0-.2-.1-.3-.3-.3zM7.4 15.3V4.2c0-.4.3-.7.7-.7H16c.4 0 .7.3.7.7v8.2h.5c.5.1 1.1.3 1.5.7V2.8c0-1.4-1.2-2.6-2.6-2.6h-8C6.7.2 5.5 1.4 5.5 2.8v13.8c.5-.6 1.3-.9 2.1-1-.1-.1-.2-.2-.2-.3z"/></svg>'),
    );

    public array $featuresRegionalMappingMenuArray = array(
        'text' => array(0 => "Geo-Fencing", 1 => "Real Time Overview"),
        'ariaLabel' => array(0 => "Geo-Fencing", 1 => "Real Time Overview"),
        'tabName' => array(0 => "geoFencing", 1 => "realTimeOverview"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M22 22.4c-.2-.2-.4-.4-.6-.5-.5-.3-1.2-.5-2-.7-.9-.2-2-.4-3.2-.5l-.6.9c1.4.1 2.6.3 3.6.5.7.2 1.4.4 1.8.6.4.2.4.4.4.4 0 .1-.1.2-.4.4-.4.2-1 .5-1.8.6-1.6.4-3.8.6-6.1.6s-4.5-.2-6.1-.6c-.7-.2-1.4-.4-1.8-.6-.4-.2-.4-.4-.4-.4 0-.1.1-.2.4-.4.4-.2 1-.5 1.8-.6 1-.3 2.2-.4 3.6-.5l-.6-.9c-1.2.1-2.3.3-3.2.5-.9.2-1.5.5-2 .7-.4.1-.6.3-.8.5-.2.2-.3.5-.3.7s.1.5.3.7c.2.2.4.4.6.5.5.3 1.2.5 2 .7 1.7.4 3.9.6 6.3.6s4.6-.2 6.3-.6c.9-.2 1.5-.5 2-.7.3-.2.5-.3.6-.5.2-.2.3-.5.3-.7s.1-.5-.1-.7"/><path class="icoLink" d="M16.5 1c-.9-.5-1.9-.7-3-.8h-.8c-.5 0-1 .1-1.4.2-.5.1-1.1.3-1.6.5s-1 .5-1.4.8L7.1 2.9c-.4.4-.7.9-1 1.3-.3.5-.5 1-.7 1.5-.7 2-.6 4.1.2 6.1 0 .1.1.1.1.2 1.1 2.4 2.9 4.6 4.4 6.9.7 1 1.3 2 2 3 .2.4.4.6.5.8l.3.4c.9-1.4 1.8-2.7 2.7-4.1 2.1-3.2 5-6.2 5.3-10.2.3-3-1.4-6.3-4.4-7.8zM8.8 8c0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2-2.3.1-4.2-1.8-4.2-4.2zm6.3 11.1-1.2 1.8 1.2-1.8c2.1-3.2 5-6.2 5.3-10.2.2-3.1-1.6-6.4-4.5-7.9-.3-.1-.6-.3-.9-.4.3.1.6.2.9.4 2.9 1.5 4.7 4.8 4.5 7.9-.2 4-3.1 7.1-5.3 10.2zm-1.2 1.8z"/></svg>',
            1 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M7.2 14.9c-.3-.3-.8-.4-1-.1L.8 20.3c-.3.3-.2.7.1 1l3.9 3.9c.3.3.8.4 1 .1l5.5-5.5c.3-.3.2-.7-.1-1l-4-3.9zm18-10.2L21.3.8c-.3-.3-.8-.4-1-.1l-5.5 5.5c-.3.3-.2.7.1 1l3.9 3.9c.3.3.8.4 1 .1l5.5-5.4c.3-.4.2-.8-.1-1.1z"/><path class="icoLink" d="M23.1 15.2c-1.5-1.1-3.6-1.1-5.5 0 .5-.7.6-1.3.7-1.7.1-.4-.1-.8-.4-1.1l-5.1-5.1c-.9-.9-2.1-1-3.1-.4l-.6-.5c-.8-.8-2-.8-2.7 0-.8.8-.8 2 0 2.7l.5.5c-.6 1-.5 2.3.4 3.1l5.2 5.2c.3.3.6.4 1 .4s.9-.2 1.6-.6c-1.1 1.9-1.1 4 0 5.5.2.3.6.3.9.2.7-.4 2.1-1.4 3.5-2.7l.6.6c-.1.5 0 1.1.4 1.6.6.6 1.7.6 2.3 0 .6-.6.6-1.7 0-2.3-.4-.4-1-.6-1.6-.4l-.6-.6c1.3-1.4 2.2-2.8 2.7-3.5.2-.4.1-.7-.2-.9zM9.9 11.7c-.2.2-.4.2-.6.2-.2 0-.4-.1-.6-.2l-.5-.5c-.3-.3-.3-.8 0-1.1.3-.3.8-.3 1.1 0l.5.5c.4.3.4.8.1 1.1zm3.7 3.7c-.2.2-.4.2-.6.2s-.4-.1-.6-.2l-1.6-1.6c-.3-.3-.3-.8 0-1.1s.8-.3 1.1 0l1.6 1.6c.5.3.5.8.1 1.1z"/></svg>'),
    );

    public array $featuresInventoryManagementMenuArray = array(
        'text' => array(0 => "Device Details", 1 => "Sparing Inventory"),
        'ariaLabel' => array(0 => "Device Details", 1 => "Sparing Inventory"),
        'tabName' => array(0 => "deviceDetails", 1 => "sparingInventory"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M22.7 12H3.3c-.7 0-1.3.6-1.3 1.3v3.9c0 .7.6 1.3 1.3 1.3h19.5c.7 0 1.3-.6 1.3-1.3v-3.9c0-.7-.6-1.3-1.4-1.3zM6 16.5c-.7 0-1.3-.6-1.3-1.3s.6-1.3 1.3-1.3 1.3.6 1.3 1.3-.6 1.3-1.3 1.3zm4.7 0c-.7 0-1.3-.6-1.3-1.3s.6-1.3 1.3-1.3c.7 0 1.3.6 1.3 1.3s-.6 1.3-1.3 1.3zM21 16h-5.4c-.5 0-.8-.4-.8-.8s.4-.8.8-.8H21c.5 0 .8.4.8.8.1.5-.3.8-.8.8z"/><path class="icoLink" d="M22.7 3.6H3.3c-.7 0-1.3.6-1.3 1.3v3.9c0 .7.6 1.3 1.3 1.3h19.5c.7 0 1.3-.6 1.3-1.3V4.9c0-.7-.6-1.3-1.4-1.3zM6 8.1c-.7 0-1.3-.6-1.3-1.3S5.2 5.6 6 5.6s1.3.6 1.3 1.3S6.7 8.1 6 8.1zm4.7 0c-.7 0-1.3-.6-1.3-1.3s.6-1.3 1.3-1.3c.7 0 1.3.6 1.3 1.3s-.6 1.3-1.3 1.3zM21 7.7h-5.4c-.5 0-.8-.4-.8-.8s.4-.8.8-.8H21c.5 0 .8.4.8.8.1.4-.3.8-.8.8zm.8 14.7H4.2c-.5 0-1-.4-1-1 0-.5.4-1 1-1h17.5c.5 0 1 .4 1 1 0 .5-.4 1-.9 1z"/></svg>',
            1 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoLink" d="M17.5 10.1H11c-.4 0-.7.3-.7.7s.3.7.7.7h6.5c.4 0 .7-.3.7-.7s-.3-.7-.7-.7M8.1 10H5.9c-.3 0-.5.2-.5.5v2.7c0 .3.2.5.5.5h2.2c.3 0 .5-.2.5-.5v-2.7c0-.3-.2-.5-.5-.5m10.1 3.5c0-.4-.3-.7-.7-.7H11c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h6.5c.4 0 .7-.3.7-.7M4.3 18.6c-.3 0-.5-.2-.5-.5V8.9c0-.3.2-.5.5-.5h14c.3 0 .5.2.5.5V14l2.2-2.2V5.1c0-1.2-1-2.2-2.2-2.2h-15c-1.2 0-2.2 1-2.2 2.2v13.5c0 1.2 1 2.2 2.2 2.2h8.8c0-.4.2-.7.5-.9l.7-.7.5-.5h-10zM8.1 4.9h2.2c.4 0 .8.4.8.8s-.4.8-.8.8H8.1c-.4 0-.8-.4-.8-.8 0-.5.3-.8.8-.8m-3.2-.3c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1m.8 10.9c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h9.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H5.7z"/><path class="icoHighlight" d="m22.2 16.1-1.6-1.5c-.1-.1-.3-.1-.4 0l-4.3 4.3c-.1.1-.1.3 0 .4l1.5 1.6c.1.1.3.1.4 0l4.3-4.3c.2-.2.2-.4.1-.5m-7.3 4.2c-.1-.1-.3-.1-.4 0l-.5.5s-.1.1-.1.2l-.1 1.7c0 .2.1.3.3.3l1.7-.2c.1 0 .1 0 .2-.1l.5-.5c.1-.1.1-.3 0-.4l-1.6-1.5zm9.4-6.3-1.5-1.5c-.1-.1-.3-.1-.4 0l-.8.8c-.1.1-.1.3 0 .4l1.5 1.5c.1.1.3.1.4 0l.8-.8c.1-.1.1-.3 0-.4"/></svg>'),
    );

    public array $featuresSiteManagementMenuArray = array(
        'text' => array(0 => "Custom Regions", 1 => "Site Details"),
        'ariaLabel' => array(0 => "Custom Regions", 1 => "Site Details"),
        'tabName' => array(0 => "customRegions", 1 => "siteDetails"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoLink" d="M12.1.2c-4.3.5-7.6 4.6-7.2 9 .5 5.7 5.7 9.9 7.5 11.2.4.3.8.2 1.2 0 1.9-1.4 7.5-6.4 7.5-12 0-4.9-4.1-8.7-9-8.2zm.9 11.3c-1.8 0-3.2-1.4-3.2-3.2 0-1.8 1.4-3.2 3.2-3.2s3.2 1.4 3.2 3.2c0 1.8-1.4 3.2-3.2 3.2z"/><path class="icoHighlight" d="m22.9 24-1.3-6c-.2-.7-.8-1.2-1.5-1.2h-.4c-1.2 1.6-2.8 3.3-5 5-.5.4-1.1.6-1.7.6-.6 0-1.2-.2-1.6-.5-1.2-.9-3.4-2.7-5.2-5.1h-.4c-.7 0-1.3.5-1.5 1.2L3 24c-.2.9.5 1.8 1.5 1.8h16.9c1 0 1.7-.9 1.5-1.8z"/></svg>',
            1 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoLink" d="M18.8 2.8H3.4c-1.2 0-2.2 1-2.2 2.2v13.7c0 1.2 1 2.2 2.2 2.2h15.4c1.2 0 2.2-1 2.2-2.2V5c0-1.2-1-2.2-2.2-2.2m-11 2H10c.5 0 .8.4.8.8 0 .5-.4.8-.8.8H7.8c-.4 0-.8-.4-.8-.8 0-.5.4-.8.8-.8m-3.3-.3c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1m14.3 13.7c0 .3-.2.5-.5.5H4c-.3 0-.5-.2-.5-.5V8.9c0-.3.2-.5.5-.5h14.3c.3 0 .5.2.5.5v9.3z"/><path class="icoHighlight" d="M17 15.4h-.7c-.2 0-.4-.2-.5-.4-.1-.2-.2-.5-.3-.7-.1-.2-.1-.4.1-.6l.5-.5c.2-.2.2-.5 0-.7l-.7-.7c-.2-.2-.5-.2-.7 0l-.7.4c-.2.2-.4.2-.6.1-.2-.1-.5-.2-.7-.3-.2-.1-.4-.3-.4-.5v-.7c0-.3-.2-.5-.5-.5h-1c-.3 0-.5.2-.5.5v.7c0 .2-.2.4-.4.5-.2.1-.5.2-.7.3-.2.1-.4.1-.6-.1l-.5-.5c-.2-.2-.5-.2-.7 0l-.7.7c-.2.2-.2.5 0 .7l.5.5c.2.2.2.4.1.6-.2.3-.3.5-.3.8-.1.2-.3.4-.5.4h-.8c-.3 0-.5.2-.5.5v1c0 .3.2.5.5.5H9c-.1-.3-.2-.7-.2-1 0-1.4 1.1-2.6 2.6-2.6s2.6 1.1 2.6 2.6c0 .4-.1.7-.2 1H17c.3 0 .5-.2.5-.5v-1c0-.3-.3-.5-.5-.5"/></svg>'),
    );

    public array $featuresDashboardMenuArray = array(
        'text' => array(0 => "Reporting"),
        'ariaLabel' => array(0 => "Reporting"),
        'tabName' => array(0 => "reporting"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M6.6 15.4c-.3.3-.3.7 0 1 .1.1.3.2.5.2s.4-.1.5-.2l2.8-2.8-1-1-2.8 2.8zM20 8l-2.2.3c-.3.1-.5.5-.2.7l.4.4-2.3 2-1.9-1.9c-.3-.3-.7-.3-1 0l-.5.5 2.9 2.9c.3.3.7.3 1 0l2.9-2.5.5.5c.3.3.7.1.7-.2l.3-2.2c-.1-.3-.3-.6-.6-.5"/><path class="icoLink" d="M21.7 18.5H5v-3.3l4.3-4.3 6.2 6.2c.1.1.3.2.5.2s.3-.1.5-.2l3.1-2.7c.3-.3.3-.7.1-1-.3-.3-.7-.3-1-.1l-2.6 2.2-6.2-6.1c-.3-.3-.7-.3-1 0L5 13.2V6.7c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7v12.5c0 .4.3.7.7.7h17.4c.4 0 .7-.3.7-.7s-.3-.7-.7-.7"/></svg>'),
    );

    public array $featuresCustomMenuArray = array(
        'text' => array(0 => "Let's Discuss", 1 => "Define your solution", 2 => "Bring it to Life", 3 => "Integration"),
        'ariaLabel' => array(0 => "Let's Discuss", 1 => "Define your solution", 2 => "Bring it to Life", 3 => "Integration"),
        'tabName' => array(0 => "meet", 1 => "solution", 2 => "build", 3 => "installation"),
        'svgIco' => array(0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="m24 22-1-3c-.1-.2 0-.4 0-.5.8-1.5 1.1-3.2.7-5-.5-2.8-2.6-5.1-5.2-6 .7 1.7.9 3.5.6 5.3-.7 3.7-3.7 6.7-7.4 7.3-.5.1-1 .1-1.5.1 1.1 1.2 2.6 2.1 4.3 2.4 1.8.3 3.5 0 5-.7.2-.1.3-.1.5 0l3 1c.6.1 1.1-.4 1-.9z"/><path class="icoLink" d="M8.5 3.2c-3.2.6-5.7 3.2-6.2 6.3-.3 1.8 0 3.6.7 5 .1.2.1.3 0 .5l-1 3c-.2.5.3 1 .9.9l3-1c.2-.1.4 0 .5 0 1.5.7 3.2 1 5 .7 3.1-.6 5.7-3.1 6.3-6.2C18.7 7 14 2.2 8.5 3.2zm2 10.2H6.6c-.4 0-.7-.3-.7-.7 0-.4.3-.7.7-.7h3.9c.4 0 .7.3.7.7 0 .4-.3.7-.7.7zm2.8-2.8H6.6c-.4 0-.7-.3-.7-.7 0-.4.3-.7.7-.7h6.7c.4 0 .7.3.7.7 0 .4-.3.7-.7.7z"/></svg>',
            1 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M16.1 21.4H9.9c-.6 0-1 .5-1 1.1v.2c0 .6.5 1.1 1 1.1h1v.2c0 1.1.9 2 1.9 2h.3c1.1 0 1.9-.9 1.9-2v-.3h1c.6 0 1-.5 1-1.1v-.2c.1-.5-.3-1-.9-1z"/><path class="icoLink" d="M12 .1C8.6.5 5.2 3.9 4.8 7.5c-.3 2.7.6 5.2 2.3 7 1 1 1.5 2.4 1.5 3.8 0 .7.6 1.3 1.3 1.3h6.3c.7 0 1.3-.6 1.3-1.3 0-1.4.5-2.8 1.4-3.8 1.4-1.5 2.3-3.6 2.3-6 0-5-4.2-9-9.2-8.4zm.2 16.2c0 .5-.4.8-.8.8s-.8-.4-.8-.8v-3.6c0-1.1-.9-2.1-2-2.1-.4 0-.8-.4-.8-.8s.4-.8.8-.8c2 0 3.6 1.7 3.6 3.7v3.6zm5.2-5.6c-1.1 0-2 .9-2 2.1v3.6c0 .5-.4.8-.8.8s-.8-.4-.8-.8v-3.6c0-2.1 1.6-3.7 3.6-3.7.4 0 .8.4.8.8s-.4.8-.8.8z"/></svg>',
            2 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M6.2 20.3v-3.1h-.6c-.4 0-.8-.1-1.2-.2v3.2c0 1.2.9 2.1 2.1 2.1h2.3v-1.8H6.5c-.1.1-.3 0-.3-.2zm9-1.6h-3.6c-.7 0-1.2.5-1.2 1.2v3c0 .7.5 1.2 1.2 1.2h3.6c.7 0 1.2-.5 1.2-1.2v-3c0-.6-.6-1.2-1.2-1.2z"/><path class="icoLink" d="M11.6 7.3h3.6c.7 0 1.2-.5 1.2-1.2v-3c0-.7-.5-1.2-1.2-1.2h-3.6c-.7 0-1.2.5-1.2 1.2v3c0 .6.5 1.2 1.2 1.2zm.7 2.1v.6c0 .5.4.9.9.9s.9-.4.9-.9v-.6c0-.5-.4-.9-.9-.9s-.9.4-.9.9zm11 2.9-2.7-2.7c-.1-.1-.3-.2-.4-.2s-.3.1-.4.2l-2.2 2.2h-9c-.4-1.3-1.6-2.2-3-2.2-1.7 0-3.1 1.4-3.1 3.1 0 1.7 1.4 3.1 3.1 3.1 1.4 0 2.6-.9 3-2.2h8.9l2.2 2.2c.1.2.3.2.5.2s.3-.1.4-.2l2.7-2.7c.2-.2.2-.6 0-.8zm-10.2 2.8c-.5 0-.9.4-.9.9v.6c0 .5.4.9.9.9s.9-.4.9-.9V16c0-.5-.4-.9-.9-.9z"/></svg>',
            3 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path class="icoHighlight" d="M23.9 16c0-.1-.1-.2-.2-.2h-.5c-.2 0-.3-.2-.3-.3-.1-.3-.2-.5-.4-.8-.1-.1 0-.2 0-.3l.4-.4c.1-.1.1-.2 0-.3-.3-.4-.6-.7-1-1h-.1c-.1 0-.1 0-.2.1l-.4.4s-.1.1-.2.1h-.1c-.3-.2-.7-.3-1.1-.4V12c0-.1-.1-.2-.2-.2-.2 0-.5-.1-.7-.1-.2 0-.5 0-.7.1-.1 0-.2.1-.2.2v.7c-.4.1-.8.2-1.1.4h-.1c-.1 0-.1 0-.2-.1l-.4-.4s-.1-.1-.2-.1h-.1c-.4.3-.7.6-1 1-.1.1-.1.2 0 .3l.4.4c.1.1.1.2 0 .3-.1.2-.3.5-.3.8 0 .2-.2.3-.3.3h-.5c-.1 0-.2.1-.2.2 0 .2-.1.5-.1.7 0 .3 0 .5.1.7 0 .1.1.2.2.2h.5c.2 0 .3.2.3.3.1.3.2.5.3.8.1.1 0 .2 0 .3l-.4.4c-.1.1-.1.2 0 .3.3.4.6.7 1 1h.1c.1 0 .1 0 .2-.1l.4-.4s.1-.1.2-.1h.1c.3.2.7.4 1.1.4v.7c0 .1.1.2.2.2.2 0 .5.1.7.1.2 0 .5 0 .7-.1.1 0 .2-.1.2-.2v-.7c.4-.1.8-.2 1.1-.4h.1c.1 0 .1 0 .2.1l.4.4s.1.1.2.1h.1c.4-.3.7-.6 1-1 .1-.1.1-.2 0-.3l-.4-.2c-.1-.1-.1-.2 0-.3.1-.2.3-.5.4-.8 0-.2.2-.3.3-.3h.5c.1 0 .2-.1.2-.2 0-.2.1-.5.1-.7-.1-.3-.1-.5-.1-.7m-3.6.9c-.1.6-.6 1.1-1.1 1.1H19c-.8 0-1.5-.7-1.4-1.6.1-.6.6-1.1 1.1-1.1h.2c.8 0 1.5.8 1.4 1.6"/><path class="icoLink" d="M19.9 4.3H3.2c-.6 0-1.2.5-1.2 1.2V9c0 .6.5 1.2 1.2 1.2h16.7c.6 0 1.2-.5 1.2-1.2V5.4c0-.6-.5-1.1-1.2-1.1m-14.4 4c-.6 0-1.2-.5-1.2-1.2.1-.6.6-1.1 1.2-1.1s1.2.5 1.2 1.2c0 .6-.5 1.1-1.2 1.1m4.1 0c-.6 0-1.2-.5-1.2-1.2 0-.6.5-1.1 1.2-1.1.6 0 1.2.5 1.2 1.2-.1.6-.6 1.1-1.2 1.1m8.9-.4h-4.6c-.4 0-.7-.3-.7-.7 0-.4.3-.7.7-.7h4.6c.4 0 .7.3.7.7 0 .4-.3.7-.7.7m-16.4 5v3.5c0 .6.5 1.2 1.2 1.2h9.3c0-.3-.1-.6-.1-.8 0-.3 0-.6.1-1 .1-.6.5-1.1 1-1.3-.2-.5-.1-1.1.2-1.6.3-.4.6-.7 1-1.1H3.2c-.6 0-1.1.5-1.1 1.1m7.5.6c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2c-.6 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2m-4.1 0c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2c-.6 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2m6.8 5.8H4.4c-.5 0-.9.4-.9.9s.4.9.9.9h7.9c.5 0 .9-.4.9-.9-.1-.5-.4-.9-.9-.9"/></svg>'),
    );

    public array $termsMenuArray = array(
        'text' => array( 0 => "Terms &amp; Conditions", 1 => "Privacy", 2 => "GDPR", 3 => "Sitemap"),
        'ariaLabel' => array( 0 => "Terms &amp; Conditions", 1 => "Rack Track Privacy Policy", 2 => "General Data Protection Regulation (GDPR)", 3 => "Sitemap"),
        'href' => array( 0 => "terms-and-conditions.php", 1 => "privacy-policy.php", 2 => "GDPR.php", 3 => "sitemap.xml")
    );

    public array $svgIconsArray = array(
        'telIco' => array( 0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20" class="svg-inline"><path d="M21.81 4.88C20.86 1.56 15.74.46 12.77.1 11.6-.04 10.4-.04 9.23.1 6.26.46 1.14 1.56.19 4.88c-.3 1.04-.24 1.98.16 2.66.27.47.7.79 1.2.9.53.13 1.12.16 1.55.16.36 0 .61-.02.63-.02.42-.04 2.57-.24 3.22-1.12.18-.25.25-.53.19-.82-.04-.21-.1-.43-.16-.64-.28-1.06-.36-1.55.66-1.91 1.61-.57 3.34-.55 3.36-.55.02 0 1.73-.02 3.35.55 1.03.36.95.85.67 1.91-.06.21-.11.42-.16.64-.06.29.01.57.19.82.66.88 2.8 1.09 3.22 1.12.05 0 1.2.09 2.19-.13.5-.11.92-.43 1.2-.9.39-.69.45-1.63.15-2.67zm-.83 2.26c-.16.28-.4.47-.69.53-.87.19-1.95.11-1.96.11-.91-.07-2.33-.36-2.65-.8-.05-.07-.06-.12-.04-.17.04-.2.09-.39.14-.59.25-.95.6-2.25-1.16-2.88-1.75-.62-3.55-.6-3.61-.6-.08 0-1.87-.02-3.62.6-1.77.62-1.42 1.92-1.16 2.87.05.2.1.39.14.59.01.05.01.1-.04.17-.33.44-1.75.74-2.66.81-.01 0-1.09.08-1.96-.11-.29-.07-.52-.25-.69-.53C.74 6.65.71 5.92.94 5.1 1.8 2.12 7.09 1.17 9.32.9 9.88.83 10.44.8 11 .8c.56 0 1.12.03 1.68.1 2.23.27 7.53 1.22 8.38 4.2.23.82.2 1.55-.08 2.04zM18.45 9.69a.4.4 0 00-.45-.33c-.21.04-.36.25-.32.46l1.16 6.73c.12.65-.05 1.32-.47 1.83-.42.52-1.04.81-1.7.81H5.33c-.66 0-1.28-.3-1.7-.81a2.25 2.25 0 01-.47-1.84l1.16-6.72c.04-.21-.1-.42-.32-.46a.4.4 0 00-.45.33l-1.16 6.72c-.16.89.07 1.8.64 2.49.57.7 1.41 1.1 2.3 1.1h11.34c.89 0 1.73-.4 2.3-1.1.57-.7.8-1.6.64-2.49l-1.16-6.72zM15.32 13.24c0-2.43-1.94-4.4-4.32-4.4-2.38 0-4.32 1.97-4.32 4.4 0 2.43 1.94 4.4 4.32 4.4 2.38 0 4.32-1.98 4.32-4.4zm-7.86 0c0-1.98 1.59-3.6 3.54-3.6s3.54 1.62 3.54 3.6c0 1.99-1.59 3.6-3.54 3.6s-3.54-1.62-3.54-3.6z"/></svg>'),
        'rackTrackIco' => array( 0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 52" class="svg-inline"><path id="rackTrackIco" d="M17.55 14.89h-6.19C-.79 15.08-2.9 30.85 5.81 37.34l13.44 13.44 4.64-4.64L8.86 30.16c-2.44-3.09-.24-7.63 3.7-7.63h5.08c5.09.02 5.04-7.64.07-7.63M27.69 24.03c-1.8 3.29-5.19 5.59-9.13 5.88l10.09 11.07c26.24-19.87-.43-53.54-23.83-33.73h12.75c8.64.43 14.32 9.33 10.12 16.78"/></svg>'),
        'facebookIco' => array( 0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="svg-inline facebook" aria-label="Facebook"><path id="facebookIco" d="M14.27 10.5h-2.83v9.12h-4.2V10.5h-2V6.93h2V4.62c0-1.65.78-4.24 4.24-4.24l3.11.01v3.46h-2.26c-.37 0-.89.19-.89.97v2.1h3.2l-.37 3.58zm.49.11" /></svg>', 1 => 'Go to Rack Track\'s Facebook Page', 2 => 'Facebook'),
        'twitterIco' => array( 0 => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="svg-inline twitter" aria-label="Twitter"><path id="twitterIco" d="M19.27 4.25c-.68.3-1.42.51-2.19.6.79-.47 1.39-1.22 1.67-2.11-.74.44-1.55.75-2.42.92-.69-.74-1.68-1.2-2.78-1.2-2.1 0-3.81 1.7-3.81 3.81 0 .3.03.59.1.87-3.14-.16-5.95-1.68-7.82-3.98a3.805 3.805 0 001.17 5.08c-.62-.02-1.21-.19-1.72-.48v.05c0 1.84 1.31 3.38 3.05 3.73-.32.09-.66.13-1 .13-.25 0-.48-.02-.72-.07a3.806 3.806 0 003.56 2.64 7.63 7.63 0 01-4.73 1.63c-.31 0-.61-.02-.91-.05 1.68 1.08 3.68 1.71 5.83 1.71 7 0 10.83-5.8 10.83-10.83 0-.16 0-.33-.01-.49.75-.53 1.39-1.2 1.9-1.96zm0 0"/></svg>', 1 => 'Go to Rack Track\'s Twitter Page', 2 => 'Twitter'),
        'contactTelIco' => array( 0 => '<svg viewBox="0 0 26 26"><path class="icoLink" d="M22.1 17.4 19.5 16c-.6-.3-1.1-.1-1.7.7-1.2 1.6-1.8 2-3.2 1.1-1.4-.8-2.3-1.7-3.6-2.9s-2.1-2.2-2.9-3.6c-.8-1.5-.5-2 1.1-3.2.7-.5 1-1 .7-1.7L8.6 3.9C8 2.8 7.2 2.7 6 3.1c-1.6.5-3.2 2.9-3.1 4 .2 3.3 1.9 7.3 5.3 10.7 3.4 3.4 7.4 5.1 10.7 5.3 1.1.1 3.5-1.5 4-3.2.4-1.1.3-1.9-.8-2.5"/><path class="icoHighlight" d="M14.4 7.4c-.5 0-1 .5-1 1s.4 1 1 1 1.1.2 1.5.6c.4.4.6 1 .6 1.6 0 .5.4 1 1 1 .5 0 1-.4 1-1 0-1.1-.4-2.2-1.2-3-.7-.7-1.8-1.1-2.9-1.2m5.9-1.6c-1.6-1.6-3.7-2.4-5.9-2.4-.5 0-1 .4-1 1 0 .5.4 1 1 1 1.7 0 3.3.7 4.5 1.8 1.2 1.2 1.9 2.8 1.8 4.5 0 .5.4 1 1 1 .5 0 1-.4 1-1 0-2.3-.9-4.4-2.4-5.9"/></svg>', 1 => 'Contact Information', 2 => 'Customer Support'),
        'salesTelIco' => array( 0 => '<svg viewBox="0 0 26 26"><path class="icoLink" d="M7.9 4.8h12V3.5C20 2.1 18.8 1 17.4 1H7.3C5.9 1 4.8 2.1 4.8 3.5v19c0 1.4 1.1 2.5 2.5 2.5h10.1c1.4 0 2.5-1.1 2.5-2.5v-5.1h-2.5v1.3c0 .4-.3.6-.6.6H7.9c-.3 0-.6-.3-.6-.6V5.4c0-.3.3-.6.6-.6M13 23.4h-1.3c-.7 0-1.3-.6-1.3-1.3 0-.7.6-1.3 1.3-1.3H13c.7 0 1.3.6 1.3 1.3 0 .8-.6 1.3-1.3 1.3"/><path class="icoHighlight" d="M20 6.4h-8.9c-.7 0-1.3.6-1.3 1.3v8.9c0 .5.6.8 1 .5l1.2-.9c.2-.2.5-.3.8-.3H20c.7 0 1.3-.6 1.3-1.3v-7c-.1-.7-.6-1.2-1.3-1.2m-3.8 7.4H13c-.4 0-.8-.4-.8-.8s.4-.8.8-.8h3.2c.4 0 .8.4.8.8s-.4.8-.8.8m2.5-3.2H13c-.4 0-.8-.4-.8-.8s.4-.8.8-.8h5.7c.4 0 .8.4.8.8s-.4.8-.8.8"/></svg>', 1 => 'Contact Information', 2 => 'Sales Support'),
        'emailIco' => array( 0 => '<svg viewBox="0 0 26 26"><path class="icoHighlight" d="M20.7 4.4 4.4 11.5c-.8.3-.8 1.5-.1 1.9l3.3 1.7 9.8-6.8c.1-.1.2 0 .2.1l-8.2 7.9c-.2.2-.3.5-.3.7v3.6c0 1 1.4 1.4 1.9.5l2-3.3 4.2 2.2c.6.3 1.3 0 1.5-.7L22 5.5c.3-.7-.5-1.4-1.3-1.1"/></svg>', 1 => 'Contact Information', 2 => 'Sales Email')
        );

    public function getSvgIconsArray(): array
    {
        return $this->svgIconsArray;
    }

    public function getHomePage(): array
    {
        return $this->homePage;
    }

    public function getAboutPage(): array
    {
        return $this->aboutPage;
    }

    public function getFeaturesPage(): array
    {
        return $this->featuresPage;
    }

    public function getFaqPage(): array
    {
        return $this->faqPage;
    }

    public function getContactPage(): array
    {
        return $this->contactPage;
    }

    public function getFeaturesMenuArray(): array
    {
        return $this->featuresMenuArray;
    }

    public function getFeaturesGlobalSearchMenuArray(): array
    {
        return $this->featuresGlobalSearchMenuArray;
    }

    public function getFeaturesRegionalMappingMenuArray(): array
    {
        return $this->featuresRegionalMappingMenuArray;
    }

    public function getFeaturesInventoryManagementMenuArray(): array
    {
        return $this->featuresInventoryManagementMenuArray;
    }

    public function getFeaturesSiteManagementMenuArray(): array
    {
        return $this->featuresSiteManagementMenuArray;
    }

    public function getFeaturesDashboardMenuArray(): array
    {
        return $this->featuresDashboardMenuArray;
    }

    public function getFeaturesCustomMenuArray(): array
    {
        return $this->featuresCustomMenuArray;
    }

    public function getTermsMenuArray(): array
    {
        return $this->termsMenuArray;
    }
    public function getFavIcon(): string
    {
        return $this->favIcon;
    }
    public function setFavIcon($favIcon)
    {
        $this->favIcon = $favIcon;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getKeywords(): string
    {
        return $this->keywords;
    }
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }
    public function getCSSLib(): string
    {
        return $this->CSSLib;
    }
    public function setCSSLib($CSSLib)
    {
        $this->CSSLib = $CSSLib;
    }
    public function getDeferJSLib(): string
    {
        return $this->DeferJSLib;
    }
    public function setDeferJSLib($DeferJSLib)
    {
        $this->DeferJSLib = $DeferJSLib;
    }
    public function getThemeColor(): string
    {
        return $this->themeColor;
    }
    public function setThemeColor($themeColor)
    {
        $this->themeColor = $themeColor;
    }
    public function getFontImport(): string
    {
        return $this->fontImport;
    }
    public function setFontImport($fontImport)
    {
        $this->fontImport = $fontImport;
    }
    public function getCopyrightYearStart(): string
    {
        return $this->copyrightYearStart;
    }
    public function setCopyrightYearStart($copyrightYearStart)
    {
        $this->copyrightYearStart = $copyrightYearStart;
    }
    public function getFacebook(): string
    {
        return $this->facebook;
    }
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }
    public function getTwitter(): string
    {
        return $this->twitter;
    }
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    public function getCompanyAddress(): string
    {
        return $this->companyAddress;
    }
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;
    }
    public function getCompanyAddressLine1(): string
    {
        return $this->companyAddressLine1;
    }
    public function getCompanyAddressLine2(): string
    {
        return $this->companyAddressLine2;
    }
    public function getCompanyEmail(): string
    {
        return $this->companyEmail;
    }
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;
    }
    public function getCompanyTel(): string
    {
        return $this->companyTel;
    }
    public function setCompanyTel($companyTel)
    {
        $this->companyTel = $companyTel;
    }
    public function getCompanySupportTel(): string
    {
        return $this->companySupportTel;
    }
    public function setCompanySupportTel($companySupportTel)
    {
        $this->companySupportTel = $companySupportTel;
    }
    public function getCompanySupportEmail(): string
    {
        return $this->companySupportEmail;
    }
    public function setCompanySupportEmail($companySupportEmail)
    {
        $this->companySupportEmail = $companySupportEmail;
    }
    public function getCompanySalesTel(): string
    {
        return $this->companySalesTel;
    }
    public function setCompanySalesTel($companySalesTel)
    {
        $this->companySalesTel = $companySalesTel;
    }
    public function getCompanySalesTel2(): string
    {
        return $this->companySalesTel2;
    }
    public function setCompanySalesTel2($companySalesTel2)
    {
        $this->companySalesTel2 = $companySalesTel2;
    }
    public function getLogin(): string
    {
        return $this->login;
    }
    public function getSignup(): string
    {
        return $this->signup;
    }
    public function getCompanySalesTel3(): string
    {
        return $this->companySalesTel3;
    }
}
