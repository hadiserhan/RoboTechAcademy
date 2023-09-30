<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title data-lang="app_title"></title>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href=<?= base_url("assets/css/devextreme/bootstrap.css") ?>  />
        <link rel="stylesheet" href=<?= base_url("assets/css/Layout.css") ?> />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href=<?= base_url("assets/css/customDevextreme.css") ?> />
        <link href=<?= base_url("assets/css/devextreme/bootstrap.css")?> rel="stylesheet" />
        <link href=<?= base_url("assets/css/devextreme/dx.common.css")?> rel="stylesheet" />
        <link href=<?= base_url("assets/css/devextreme/dx.light.css")?> rel="stylesheet" />
        
        <script src=<?= base_url("assets/js/devextreme/jquery.js")?>></script>
        <script src=<?= base_url("assets/js/devextreme/bootstrap.js")?>></script>
        <script src=<?= base_url("assets/js/devextreme/dx.all.js")?>></script>
        <script src="<?= base_url("assets/js/UI/Layout.js") ?>"></script>


        <!-- <script src="~/js/devextreme/jszip.js"></script>
        <script src="~/js/UI/Enums.js" asp-append-version="false"></script>
        <script src="~/js/UI/Helper.js" asp-append-version="false"></script>
        <script src="~/js/UI/AppComponents.js" asp-append-version="false"></script>
        <script src="~/js/site.js" asp-append-version="false"></script> -->


    </head>

<div id="SideNav" class="vertical-layout h-100 vertical-menu-modern menu-expanded navbar-sticky footer-static">
    <nav class="navbar header-navbar navbar-shadow align-items-center bg-primary navbar-expand fixed-top">
        <div class="navbar-container d-flex content align-items-center">
            <ul class="nav navbar-nav ">
                <li class="nav-item">
                    <a href="#" target="_self" class="nav-link show_hide_menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="bookmark-wrapper align-items-center flex-grow-1 d-none d-lg-flex">
                <ul data-v-1134b199="" class="navbar-nav nav">
                    <li data-v-1134b199="" id="bookmark-0" class="nav-item">
                        <a data-v-1134b199="" href="" class="nav-link" target="_self">
                            <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                <rect data-v-1134b199="" x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line data-v-1134b199="" x1="16" y1="2" x2="16" y2="6"></line>
                                <line data-v-1134b199="" x1="8" y1="2" x2="8" y2="6"></line><line data-v-1134b199="" x1="3" y1="10" x2="21" y2="10"></line>
                            </svg><!---->
                        </a>
                        
                    </li>
                    <li data-v-1134b199="" id="bookmark-1" class="nav-item he-tooltip">
                        <a data-v-1134b199="" href="" class="nav-link" target="_self">
                            <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                <path data-v-1134b199="" d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg><!---->
                        </a>
                        <span class="tooltiptext tooltip-bottom">Tooltip text2</span>
                    </li>
                    <li data-v-1134b199="" id="bookmark-2" class="nav-item he-tooltip">
                        <a data-v-1134b199=""  class="nav-link" target="_self">
                            <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path data-v-1134b199="" d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline data-v-1134b199="" points="22,6 12,13 2,6"></polyline>
                            </svg><!---->
                        </a>
                        <span class="tooltiptext tooltip-bottom">Tooltip text1</span>
                    </li>
                    <li data-v-1134b199="" id="bookmark-3" class="nav-item">
                        <a data-v-1134b199="" href="" class="nav-link router-link-exact-active router-link-active" target="_self" aria-current="page">
                            <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                                <polyline data-v-1134b199="" points="9 11 12 14 22 4"></polyline>
                                <path data-v-1134b199="" d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg><!---->
                        </a>
                    </li>
                    <li data-v-1134b199="" class="nav-item b-nav-dropdown dropdown" link-classes="bookmark-star" id="__BVID__58">
                        <a role="button" aria-haspopup="true" aria-expanded="false" href="#" target="_self" class="nav-link dropdown-toggle" id="__BVID__58__BV_toggle_">
                            <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-star">
                                <polygon data-v-1134b199="" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </a>
                        <ul tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__58__BV_toggle_"><!---->
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav nav align-items-center ml-auto">
                <li id="dropdown-grouped" data-toggle="dropdown" class="nav-item b-nav-dropdown dropdown dropdown-language" variant="link">
                    <a id="dropdown-grouped__BV_toggle_" role="button" aria-haspopup="true" aria-expanded="false" href="#dropdown-grouped" target="_self" class="nav-link dropdown-toggle">
                        <span class="ml-50 text-body">English</span>
                    </a>
                    <ul tabindex="-1" aria-labelledby="dropdown-grouped__BV_toggle_" class="dropdown-menu dropdown-menu-right">
                        <li role="presentation">
                            <a role="menuitem" href="#" target="_self" class="dropdown-item">
                                <span class="ml-50">English</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" href="#" target="_self" class="dropdown-item">
                                <span class="ml-50">French</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" href="#" target="_self" class="dropdown-item">
                                <span class="ml-50">German</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" href="#" target="_self" class="dropdown-item">
                                <span class="ml-50">Portuguese</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a href="#" target="_self" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </a>
                </li>
                <li data-v-0e8a7f4f="" class="nav-item nav-search">
                    <a data-v-0e8a7f4f="" href="javascript:void(0)" class="nav-link nav-link-search">
                        <svg data-v-0e8a7f4f="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle data-v-0e8a7f4f="" cx="11" cy="11" r="8"></circle>
                            <line data-v-0e8a7f4f="" x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </a>
                    <div data-v-0e8a7f4f="" class="search-input">
                        <div data-v-0e8a7f4f="" class="search-input-icon">
                            <svg data-v-0e8a7f4f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle data-v-0e8a7f4f="" cx="11" cy="11" r="8"></circle>
                                <line data-v-0e8a7f4f="" x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div><!---->
                        <div data-v-0e8a7f4f="" class="search-input-close">
                            <svg data-v-0e8a7f4f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line data-v-0e8a7f4f="" x1="18" y1="6" x2="6" y2="18"></line><line data-v-0e8a7f4f="" x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                        <ul data-v-0e8a7f4f="" class="ps-container search-list search-list-main scroll-area overflow-hidden ps">
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </ul>
                    </div>
                </li>
                <li data-v-a58fee00="" class="nav-item b-nav-dropdown dropdown dropdown-cart mr-25" id="__BVID__76">
                    <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" target="_self" class="nav-link dropdown-toggle" id="__BVID__76__BV_toggle_">
                        <span data-v-a58fee00="" class="feather-icon position-relative">
                            <svg data-v-a58fee00="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-body feather feather-shopping-cart">
                                <circle data-v-a58fee00="" cx="9" cy="21" r="1"></circle><circle data-v-a58fee00="" cx="20" cy="21" r="1"></circle>
                                <path data-v-a58fee00="" d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            <span data-v-a58fee00="" class="badge badge-up badge-pill badge-primary">5</span>
                        </span>
                    </a>
                    <ul tabindex="-1" class="dropdown-menu dropdown-menu-media dropdown-menu-right" aria-labelledby="__BVID__76__BV_toggle_">
                        <li data-v-a58fee00="" class="dropdown-menu-header">
                            <div data-v-a58fee00="" class="dropdown-header d-flex">
                                <h4 data-v-a58fee00="" class="notification-title mb-0 mr-auto"> My Cart </h4>
                                <span data-v-a58fee00="" class="badge badge-light-primary badge-pill"> 5 Items </span>
                            </div>
                        </li>
                        <li data-v-a58fee00="" class="ps-container scrollable-container media-list scroll-area ps ps--active-y">
                            <div data-v-a58fee00="" class="media">
                                <div data-v-a58fee00="" class="media-aside align-self-start">
                                    <img data-v-a58fee00=""  alt="Apple Watch Series 5" width="62" 
                                    class="rounded">
                                </div>
                                <div data-v-a58fee00="" class="media-body">
                                    <svg data-v-a58fee00="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cart-item-remove cursor-pointer feather feather-x">
                                        <line data-v-a58fee00="" x1="18" y1="6" x2="6" y2="18"></line>
                                        <line data-v-a58fee00="" x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div data-v-a58fee00="" class="media-heading">
                                        <h6 data-v-a58fee00="" class="cart-item-title">
                                            <a data-v-a58fee00="" href="#" target="_self" class="text-body"> Apple Watch Series 5 </a>
                                        </h6>
                                        <small data-v-a58fee00="" class="cart-item-by">By Apple</small>
                                    </div>
                                    <div data-v-a58fee00="" class="cart-item-qty ml-1">
                                        <div data-v-a58fee00="" role="group" lang="en-US" tabindex="-1" class="b-form-spinbutton form-control d-flex align-items-stretch form-control-sm">
                                            <button tabindex="-1" type="button" aria-label="Decrement" aria-keyshortcuts="ArrowDown" class="btn btn-sm border-0 rounded-0 py-0" aria-controls="__BVID__1003">
                                                <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="dash" aria-hidden="true" 
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-dash b-icon bi">
                                                    <g transform="translate(8 8) scale(1.25 1.25) translate(-8 -8)">
                                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                    </g>
                                                </svg>
                                            </button><!---->
                                            <output dir="ltr" role="spinbutton" tabindex="0" aria-live="off" aria-valuemin="1" aria-valuemax="100" aria-valuenow="1" aria-valuetext="1" 
                                                class="flex-grow-1 align-self-center border-left border-right" id="__BVID__1003">
                                                <bdi>1</bdi>
                                            </output>
                                            <button tabindex="-1" type="button" aria-label="Increment" aria-keyshortcuts="ArrowUp" class="btn btn-sm border-0 rounded-0 py-0" 
                                                    aria-controls="__BVID__1003">
                                                <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="plus" aria-hidden="true" 
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-plus b-icon bi">
                                                        <g transform="translate(8 8) scale(1.25 1.25) translate(-8 -8)">
                                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                        </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 data-v-a58fee00="" class="cart-item-price"> $339.99 </h5>
                                </div>
                            </div>
                            <div data-v-a58fee00="" class="media">
                                <div data-v-a58fee00="" class="media-aside align-self-start">
                                    <img data-v-a58fee00="" 
                                        alt="Google - Google Home - White/Slate fabric" width="62" class="rounded">
                                </div>
                                <div data-v-a58fee00="" class="media-body">
                                    <svg data-v-a58fee00="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" 
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                            class="cart-item-remove cursor-pointer feather feather-x"><line data-v-a58fee00="" x1="18" y1="6" x2="6" y2="18"></line>
                                            <line data-v-a58fee00="" x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div data-v-a58fee00="" class="media-heading">
                                        <h6 data-v-a58fee00="" class="cart-item-title">
                                            <a data-v-a58fee00="" href="#" target="_self" class="text-body"> Google - Google Home - White/Slate fabric </a>
                                        </h6>
                                        <small data-v-a58fee00="" class="cart-item-by">By Google</small>
                                    </div>
                                    <div data-v-a58fee00="" class="cart-item-qty ml-1">
                                        <div data-v-a58fee00="" role="group" lang="en-US" tabindex="-1" 
                                            class="b-form-spinbutton form-control d-flex align-items-stretch form-control-sm">
                                            <button tabindex="-1" type="button" aria-label="Decrement" aria-keyshortcuts="ArrowDown"
                                                class="btn btn-sm border-0 rounded-0 py-0" aria-controls="__BVID__1005">
                                                <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="dash" aria-hidden="true" 
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-dash b-icon bi">
                                                    <g transform="translate(8 8) scale(1.25 1.25) translate(-8 -8)">
                                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                    </g>
                                                </svg>
                                            </button><!---->
                                            <output dir="ltr" role="spinbutton" tabindex="0" aria-live="off" aria-valuemin="1" aria-valuemax="100" aria-valuenow="1" 
                                                aria-valuetext="1" class="flex-grow-1 align-self-center border-left border-right" id="__BVID__1005">
                                                <bdi>1</bdi>
                                            </output>
                                            <button tabindex="-1" type="button" aria-label="Increment" aria-keyshortcuts="ArrowUp" class="btn btn-sm border-0 rounded-0 py-0"
                                                aria-controls="__BVID__1005">
                                                <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="plus" aria-hidden="true" 
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-plus b-icon bi">
                                                    <g transform="translate(8 8) scale(1.25 1.25) translate(-8 -8)">
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 data-v-a58fee00="" class="cart-item-price"> $129.29 </h5>
                                </div>
                            </div>
                            <div data-v-a58fee00="" class="media">
                                    <div data-v-a58fee00="" class="media-aside align-self-start">
                                        <img data-v-a58fee00=""  alt="Apple iPhone 11 (64GB, Black)" 
                                        width="62" class="rounded">
                                    </div>
                                <div data-v-a58fee00="" class="media-body">
                                    <svg data-v-a58fee00="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" 
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                            class="cart-item-remove cursor-pointer feather feather-x"><line data-v-a58fee00="" x1="18" y1="6" x2="6" y2="18"></line>
                                            <line data-v-a58fee00="" x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div data-v-a58fee00="" class="media-heading">
                                        <h6 data-v-a58fee00="" class="cart-item-title">
                                            <a data-v-a58fee00="" href="#" target="_self" class="text-body"> Apple iPhone 11 (64GB, Black) </a>
                                        </h6>
                                        <small data-v-a58fee00="" class="cart-item-by">By Apple</small>
                                    </div>
                                    <div data-v-a58fee00="" class="cart-item-qty ml-1">
                                        <div data-v-a58fee00="" role="group" lang="en-US" tabindex="-1" 
                                                class="b-form-spinbutton form-control d-flex align-items-stretch form-control-sm">
                                            <button tabindex="-1" type="button" aria-label="Decrement" aria-keyshortcuts="ArrowDown" 
                                                class="btn btn-sm border-0 rounded-0 py-0" aria-controls="__BVID__1007">
                                                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="dash" aria-hidden="true" 
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-dash b-icon bi">
                                                            <g transform="translate(8 8) scale(1.25 1.25) translate(-8 -8)"
                                                                ><path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                            </g>
                                                    </svg>
                                            </button><!---->
                                            <output dir="ltr" role="spinbutton" tabindex="0" aria-live="off" aria-valuemin="1" aria-valuemax="100" aria-valuenow="1" 
                                                aria-valuetext="1" class="flex-grow-1 align-self-center border-left border-right" id="__BVID__1007">
                                                <bdi>1</bdi>
                                            </output>
                                            <button tabindex="-1" type="button" aria-label="Increment" aria-keyshortcuts="ArrowUp" 
                                                class="btn btn-sm border-0 rounded-0 py-0" aria-controls="__BVID__1007">
                                                <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="plus" aria-hidden="true" 
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-plus b-icon bi">
                                                        <g transform="translate(8 8) scale(1.25 1.25) translate(-8 -8)">
                                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                        </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 data-v-a58fee00="" class="cart-item-price"> $669.99 </h5>
                                </div>
                            </div>
                        </li><!---->
                    </ul>
                </li>
                <li class="nav-item b-nav-dropdown dropdown dropdown-notification mr-25" id="__BVID__79">
                    <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" target="_self" class="nav-link dropdown-toggle" id="__BVID__79__BV_toggle_">
                        <span class="feather-icon position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                stroke-linecap="round" stroke-linejoin="round" class="text-body feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="badge badge-up badge-pill bg-danger">6</span>
                        </span>
                    </a>
                    <ul tabindex="-1" class="dropdown-menu dropdown-menu-media dropdown-menu-right" aria-labelledby="__BVID__79__BV_toggle_">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto"> Notifications </h4>
                                <span class="badge badge-light-primary badge-pill"> 6 New </span>
                            </div>
                        </li>
                        <li class="ps-container scrollable-container media-list scroll-area ps">
                            <a href="#" target="_self" class="">
                                <div class="media">
                                    <div class="media-aside align-self-start">
                                        <span class="b-avatar badge-light-success rounded-circle" style="width: 32px; height: 32px;">
                                            <span class="b-avatar-img">
                                                <img src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-3/img/13-small.d796bffd.png" alt="avatar">
                                            </span><!---->
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder"> Congratulation Sam 🎉 </span>
                                        </p>
                                        <small class="notification-text">Won the monthly best seller badge</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="_self" class="">
                                <div class="media">
                                    <div class="media-aside align-self-start">
                                        <span class="b-avatar badge-light-success rounded-circle" style="width: 32px; height: 32px;">
                                            <span class="b-avatar-img">
                                                <img src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-3/img/13-small.d796bffd.png" alt="avatar">
                                            </span><!---->
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder"> Congratulation Sam 🎉 </span>
                                        </p>
                                        <small class="notification-text">Won the monthly best seller badge</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="_self" class="">
                                <div class="media">
                                    <div class="media-aside align-self-start">
                                        <span class="b-avatar badge-light-success rounded-circle" style="width: 32px; height: 32px;">
                                            <span class="b-avatar-img">
                                                <img src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-3/img/13-small.d796bffd.png" alt="avatar">
                                            </span><!---->
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder"> Congratulation Sam 🎉 </span>
                                        </p>
                                        <small class="notification-text">Won the monthly best seller badge</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="_self" class="">
                                <div class="media">
                                    <div class="media-aside align-self-start">
                                        <span class="b-avatar badge-light-success rounded-circle" style="width: 32px; height: 32px;">
                                            <span class="b-avatar-img">
                                                <img src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-3/img/13-small.d796bffd.png" alt="avatar">
                                            </span><!---->
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder"> Congratulation Sam 🎉 </span>
                                        </p>
                                        <small class="notification-text">Won the monthly best seller badge</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="_self" class="">
                                <div class="media">
                                    <div class="media-aside align-self-start">
                                        <span class="b-avatar badge-light-success rounded-circle" style="width: 32px; height: 32px;">
                                            <span class="b-avatar-img">
                                                <img src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-3/img/13-small.d796bffd.png" alt="avatar">
                                            </span><!---->
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder"> Congratulation Sam 🎉 </span>
                                        </p>
                                        <small class="notification-text">Won the monthly best seller badge</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer">
                            <button type="button" class="btn btn-primary btn-block">Read all notifications</button>
                        </li>
                    </ul>
                </li>
                <li class="nav-item b-nav-dropdown dropdown dropdown-user" id="__BVID__96">
                    <a role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" href="#" target="_self" 
                        class="nav-link dropdown-toggle d-flex align-items-center dropdown-user-link" id="1">
                        <div class="d-sm-flex d-none user-nav">
                            <p class="user-name font-weight-bolder mb-0"> Hadi Serhan</p>
                            <span class="user-status">admin</span>
                        </div>
                        <span class="b-avatar badge-minimal badge-light-primary rounded-circle" style="width: 40px; height: 40px;">
                            <span class="b-avatar-img">
                                <img src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-3/img/13-small.d796bffd.png" alt="avatar">
                            </span>
                            <span class="b-avatar-badge badge-success" style="font-size: calc(11.2px); bottom: 0px; right: 0px;"></span>
                        </span>
                    </a>
                    <ul tabindex="-1" class="dropdown-menu dropdown-menu-right" aria-labelledby="1">
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/pages/profile" class="dropdown-item d-flex align-items-center" role="menuitem" 
                                target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/apps/email" class="dropdown-item d-flex align-items-center" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                    stroke-linejoin="round" class="mr-50 feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/apps/todo" class="dropdown-item router-link-exact-active router-link-active d-flex align-items-center" role="menuitem" target="_self" aria-current="page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <span>Task</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/apps/chat" class="dropdown-item d-flex align-items-center" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span>Chat</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <hr role="separator" aria-orientation="horizontal" class="dropdown-divider">
                        </li>
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/pages/account-setting" class="dropdown-item d-flex align-items-center" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/pages/pricing" class="dropdown-item d-flex align-items-center" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                                <span>Pricing</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-3/pages/faq" class="dropdown-item d-flex align-items-center" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span>FAQ</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a role="menuitem" href="#" target="_self" class="dropdown-item d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main-menu menu-fixed menu-accordion menu-shadow expanded menu-light">
        <div class="navbar-header expanded">
            <div class="shadow-bottom"></div>
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a href="#" class="navbar-brand router-link-active" target="_self">
                        <svg style="    margin-top: -46px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                            viewBox="16 0 396 135" height="90" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="id1"><path d="M 75.765625 76 L 165.667969 76 L 165.667969 153.132812 L 75.765625 153.132812 Z M 75.765625 76 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="#087b8f" d="M 143.191406 128.363281 C 143.191406 132.105469 140.175781 135.132812 136.449219 135.132812 C 132.730469 135.132812 129.710938 132.105469 129.710938 128.363281 C 129.710938 124.625 132.730469 121.597656 136.449219 121.597656 C 140.175781 121.597656 143.191406 124.625 143.191406 128.363281 Z M 111.730469 128.363281 C 111.730469 132.105469 108.707031 135.132812 104.988281 135.132812 C 101.257812 135.132812 98.242188 132.105469 98.242188 128.363281 C 98.242188 124.625 101.257812 121.597656 104.988281 121.597656 C 108.707031 121.597656 111.730469 124.625 111.730469 128.363281 Z M 152.1875 139.640625 C 152.179688 144.621094 148.15625 148.660156 143.191406 148.660156 L 98.242188 148.660156 C 93.277344 148.660156 89.253906 144.621094 89.253906 139.640625 L 89.253906 117.089844 C 89.253906 112.105469 93.277344 108.070312 98.242188 108.0625 L 143.191406 108.0625 C 148.15625 108.070312 152.179688 112.105469 152.1875 117.089844 Z M 158.925781 121.597656 L 156.671875 121.597656 L 156.671875 117.089844 C 156.671875 109.617188 150.640625 103.554688 143.191406 103.554688 L 125.210938 103.554688 L 125.210938 93.285156 C 129.511719 90.796875 130.988281 85.277344 128.5 80.960938 C 126.015625 76.644531 120.527344 75.171875 116.222656 77.660156 C 111.921875 80.152344 110.445312 85.667969 112.9375 89.976562 C 113.71875 91.355469 114.859375 92.492188 116.222656 93.285156 L 116.222656 103.554688 L 98.242188 103.554688 C 90.796875 103.554688 84.753906 109.617188 84.753906 117.089844 L 84.753906 121.597656 L 82.511719 121.597656 C 78.785156 121.597656 75.765625 124.625 75.765625 128.363281 C 75.765625 132.105469 78.785156 135.132812 82.511719 135.132812 L 84.753906 135.132812 L 84.753906 139.640625 C 84.753906 147.113281 90.796875 153.175781 98.242188 153.175781 L 143.191406 153.175781 C 150.640625 153.175781 156.671875 147.113281 156.671875 139.640625 L 156.671875 135.132812 L 158.925781 135.132812 C 162.652344 135.132812 165.667969 132.105469 165.667969 128.363281 C 165.667969 124.625 162.652344 121.597656 158.925781 121.597656 " fill-opacity="1" fill-rule="nonzero"/></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(169.710013, 109.83097)"><g><path d="M 22.4375 -3.515625 C 22.75 -3.328125 22.992188 -3.078125 23.171875 -2.765625 C 23.347656 -2.453125 23.4375 -2.128906 23.4375 -1.796875 C 23.4375 -1.367188 23.296875 -0.972656 23.015625 -0.609375 C 22.648438 -0.179688 22.097656 0.03125 21.359375 0.03125 C 20.785156 0.03125 20.257812 -0.0976562 19.78125 -0.359375 C 18.050781 -1.335938 17.1875 -3.335938 17.1875 -6.359375 C 17.1875 -7.222656 16.90625 -7.90625 16.34375 -8.40625 C 15.78125 -8.914062 14.96875 -9.171875 13.90625 -9.171875 L 7.1875 -9.171875 L 7.1875 -2.1875 C 7.1875 -1.539062 7.007812 -1.015625 6.65625 -0.609375 C 6.3125 -0.203125 5.851562 0 5.28125 0 C 4.59375 0 3.988281 -0.207031 3.46875 -0.625 C 2.957031 -1.050781 2.703125 -1.570312 2.703125 -2.1875 L 2.703125 -22.96875 C 2.703125 -23.59375 2.910156 -24.113281 3.328125 -24.53125 C 3.742188 -24.957031 4.265625 -25.171875 4.890625 -25.171875 L 15.25 -25.171875 C 16.488281 -25.171875 17.660156 -24.832031 18.765625 -24.15625 C 19.867188 -23.488281 20.75 -22.566406 21.40625 -21.390625 C 22.070312 -20.210938 22.40625 -18.894531 22.40625 -17.4375 C 22.40625 -16.238281 22.078125 -15.066406 21.421875 -13.921875 C 20.773438 -12.785156 19.9375 -11.882812 18.90625 -11.21875 C 20.414062 -10.164062 21.242188 -8.75 21.390625 -6.96875 C 21.460938 -6.59375 21.5 -6.222656 21.5 -5.859375 C 21.59375 -5.117188 21.6875 -4.585938 21.78125 -4.265625 C 21.882812 -3.941406 22.101562 -3.691406 22.4375 -3.515625 Z M 15.0625 -12.875 C 15.5 -12.875 15.921875 -13.078125 16.328125 -13.484375 C 16.734375 -13.890625 17.066406 -14.429688 17.328125 -15.109375 C 17.585938 -15.796875 17.71875 -16.535156 17.71875 -17.328125 C 17.71875 -18.003906 17.585938 -18.625 17.328125 -19.1875 C 17.066406 -19.75 16.734375 -20.195312 16.328125 -20.53125 C 15.921875 -20.863281 15.5 -21.03125 15.0625 -21.03125 L 7.1875 -21.03125 L 7.1875 -12.875 Z M 15.0625 -12.875 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(194.415067, 109.83097)"><g><path d="M 25.84375 -12.578125 C 25.84375 -10.210938 25.316406 -8.039062 24.265625 -6.0625 C 23.210938 -4.082031 21.753906 -2.515625 19.890625 -1.359375 C 18.035156 -0.210938 15.945312 0.359375 13.625 0.359375 C 11.300781 0.359375 9.207031 -0.210938 7.34375 -1.359375 C 5.488281 -2.515625 4.039062 -4.082031 3 -6.0625 C 1.957031 -8.039062 1.4375 -10.210938 1.4375 -12.578125 C 1.4375 -14.953125 1.957031 -17.128906 3 -19.109375 C 4.039062 -21.085938 5.488281 -22.648438 7.34375 -23.796875 C 9.207031 -24.953125 11.300781 -25.53125 13.625 -25.53125 C 15.945312 -25.53125 18.035156 -24.953125 19.890625 -23.796875 C 21.753906 -22.648438 23.210938 -21.085938 24.265625 -19.109375 C 25.316406 -17.128906 25.84375 -14.953125 25.84375 -12.578125 Z M 21.171875 -12.578125 C 21.171875 -14.191406 20.847656 -15.648438 20.203125 -16.953125 C 19.554688 -18.253906 18.65625 -19.289062 17.5 -20.0625 C 16.351562 -20.832031 15.0625 -21.21875 13.625 -21.21875 C 12.164062 -21.21875 10.863281 -20.835938 9.71875 -20.078125 C 8.582031 -19.328125 7.695312 -18.289062 7.0625 -16.96875 C 6.425781 -15.65625 6.109375 -14.191406 6.109375 -12.578125 C 6.109375 -10.972656 6.425781 -9.507812 7.0625 -8.1875 C 7.695312 -6.875 8.582031 -5.835938 9.71875 -5.078125 C 10.863281 -4.328125 12.164062 -3.953125 13.625 -3.953125 C 15.0625 -3.953125 16.351562 -4.332031 17.5 -5.09375 C 18.65625 -5.863281 19.554688 -6.898438 20.203125 -8.203125 C 20.847656 -9.515625 21.171875 -10.972656 21.171875 -12.578125 Z M 21.171875 -12.578125 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(221.709287, 109.83097)"><g><path d="M 17.796875 -13.953125 C 19.066406 -13.441406 20.101562 -12.671875 20.90625 -11.640625 C 21.707031 -10.617188 22.109375 -9.289062 22.109375 -7.65625 C 22.109375 -4.800781 21.289062 -2.8125 19.65625 -1.6875 C 18.03125 -0.5625 16.09375 0 13.84375 0 L 4.890625 0 C 4.265625 0 3.742188 -0.207031 3.328125 -0.625 C 2.910156 -1.050781 2.703125 -1.570312 2.703125 -2.1875 L 2.703125 -22.96875 C 2.703125 -23.59375 2.910156 -24.113281 3.328125 -24.53125 C 3.742188 -24.957031 4.265625 -25.171875 4.890625 -25.171875 L 13.953125 -25.171875 C 18.503906 -25.171875 20.78125 -23.035156 20.78125 -18.765625 C 20.78125 -17.691406 20.519531 -16.738281 20 -15.90625 C 19.488281 -15.082031 18.753906 -14.429688 17.796875 -13.953125 Z M 16.109375 -17.96875 C 16.109375 -18.957031 15.863281 -19.695312 15.375 -20.1875 C 14.882812 -20.675781 14.191406 -20.921875 13.296875 -20.921875 L 7.375 -20.921875 L 7.375 -15.3125 L 13.40625 -15.3125 C 14.125 -15.3125 14.753906 -15.550781 15.296875 -16.03125 C 15.835938 -16.507812 16.109375 -17.15625 16.109375 -17.96875 Z M 13.84375 -4.140625 C 14.96875 -4.140625 15.847656 -4.4375 16.484375 -5.03125 C 17.117188 -5.632812 17.4375 -6.507812 17.4375 -7.65625 C 17.4375 -9.070312 17.0625 -9.992188 16.3125 -10.421875 C 15.570312 -10.859375 14.664062 -11.078125 13.59375 -11.078125 L 7.375 -11.078125 L 7.375 -4.140625 Z M 13.84375 -4.140625 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(245.26359, 109.83097)"><g><path d="M 25.84375 -12.578125 C 25.84375 -10.210938 25.316406 -8.039062 24.265625 -6.0625 C 23.210938 -4.082031 21.753906 -2.515625 19.890625 -1.359375 C 18.035156 -0.210938 15.945312 0.359375 13.625 0.359375 C 11.300781 0.359375 9.207031 -0.210938 7.34375 -1.359375 C 5.488281 -2.515625 4.039062 -4.082031 3 -6.0625 C 1.957031 -8.039062 1.4375 -10.210938 1.4375 -12.578125 C 1.4375 -14.953125 1.957031 -17.128906 3 -19.109375 C 4.039062 -21.085938 5.488281 -22.648438 7.34375 -23.796875 C 9.207031 -24.953125 11.300781 -25.53125 13.625 -25.53125 C 15.945312 -25.53125 18.035156 -24.953125 19.890625 -23.796875 C 21.753906 -22.648438 23.210938 -21.085938 24.265625 -19.109375 C 25.316406 -17.128906 25.84375 -14.953125 25.84375 -12.578125 Z M 21.171875 -12.578125 C 21.171875 -14.191406 20.847656 -15.648438 20.203125 -16.953125 C 19.554688 -18.253906 18.65625 -19.289062 17.5 -20.0625 C 16.351562 -20.832031 15.0625 -21.21875 13.625 -21.21875 C 12.164062 -21.21875 10.863281 -20.835938 9.71875 -20.078125 C 8.582031 -19.328125 7.695312 -18.289062 7.0625 -16.96875 C 6.425781 -15.65625 6.109375 -14.191406 6.109375 -12.578125 C 6.109375 -10.972656 6.425781 -9.507812 7.0625 -8.1875 C 7.695312 -6.875 8.582031 -5.835938 9.71875 -5.078125 C 10.863281 -4.328125 12.164062 -3.953125 13.625 -3.953125 C 15.0625 -3.953125 16.351562 -4.332031 17.5 -5.09375 C 18.65625 -5.863281 19.554688 -6.898438 20.203125 -8.203125 C 20.847656 -9.515625 21.171875 -10.972656 21.171875 -12.578125 Z M 21.171875 -12.578125 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(272.557809, 109.83097)"><g><path d="M 19.234375 -25.171875 C 19.878906 -25.171875 20.40625 -24.976562 20.8125 -24.59375 C 21.21875 -24.207031 21.421875 -23.703125 21.421875 -23.078125 C 21.421875 -22.453125 21.21875 -21.953125 20.8125 -21.578125 C 20.40625 -21.210938 19.878906 -21.03125 19.234375 -21.03125 L 13.59375 -21.03125 L 13.59375 -2.1875 C 13.59375 -1.570312 13.363281 -1.050781 12.90625 -0.625 C 12.445312 -0.207031 11.882812 0 11.21875 0 C 10.539062 0 9.988281 -0.207031 9.5625 -0.625 C 9.132812 -1.050781 8.921875 -1.570312 8.921875 -2.1875 L 8.921875 -21.03125 L 3.265625 -21.03125 C 2.617188 -21.03125 2.09375 -21.222656 1.6875 -21.609375 C 1.28125 -21.992188 1.078125 -22.5 1.078125 -23.125 C 1.078125 -23.71875 1.285156 -24.207031 1.703125 -24.59375 C 2.128906 -24.976562 2.648438 -25.171875 3.265625 -25.171875 Z M 19.234375 -25.171875 "/></g></g></g><g fill="#1d1ea2" 
                            fill-opacity="1"><g transform="translate(295.069254, 109.83097)"><g><path d="M 16.9375 -4.140625 C 17.5625 -4.140625 18.082031 -3.925781 18.5 -3.5 C 18.914062 -3.082031 19.125 -2.597656 19.125 -2.046875 C 19.125 -1.453125 18.914062 -0.960938 18.5 -0.578125 C 18.082031 -0.191406 17.5625 0 16.9375 0 L 4.890625 0 C 4.265625 0 3.742188 -0.207031 3.328125 -0.625 C 2.910156 -1.050781 2.703125 -1.570312 2.703125 -2.1875 L 2.703125 -22.96875 C 2.703125 -23.59375 2.910156 -24.113281 3.328125 -24.53125 C 3.742188 -24.957031 4.265625 -25.171875 4.890625 -25.171875 L 16.9375 -25.171875 C 17.5625 -25.171875 18.082031 -24.972656 18.5 -24.578125 C 18.914062 -24.179688 19.125 -23.671875 19.125 -23.046875 C 19.125 -22.441406 18.921875 -21.953125 18.515625 -21.578125 C 18.109375 -21.210938 17.582031 -21.03125 16.9375 -21.03125 L 7.1875 -21.03125 L 7.1875 -14.921875 L 15.3125 -14.921875 C 15.9375 -14.921875 16.457031 -14.722656 16.875 -14.328125 C 17.300781 -13.929688 17.515625 -13.421875 17.515625 -12.796875 C 17.515625 -12.203125 17.304688 -11.71875 16.890625 -11.34375 C 16.484375 -10.96875 15.957031 -10.78125 15.3125 -10.78125 L 7.1875 -10.78125 L 7.1875 -4.140625 Z M 16.9375 -4.140625 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(315.638814, 109.83097)"><g><path d="M 20.3125 -23.9375 C 21.050781 -23.5625 21.421875 -22.953125 21.421875 -22.109375 C 21.421875 -21.609375 21.242188 -21.117188 20.890625 -20.640625 C 20.503906 -20.128906 20.015625 -19.875 19.421875 -19.875 C 19.003906 -19.875 18.59375 -19.984375 18.1875 -20.203125 C 17.019531 -20.753906 15.75 -21.03125 14.375 -21.03125 C 12.695312 -21.03125 11.234375 -20.675781 9.984375 -19.96875 C 8.742188 -19.257812 7.785156 -18.265625 7.109375 -16.984375 C 6.441406 -15.703125 6.109375 -14.234375 6.109375 -12.578125 C 6.109375 -9.753906 6.867188 -7.609375 8.390625 -6.140625 C 9.910156 -4.679688 11.90625 -3.953125 14.375 -3.953125 C 15.84375 -3.953125 17.113281 -4.226562 18.1875 -4.78125 C 18.625 -4.96875 19.007812 -5.0625 19.34375 -5.0625 C 19.96875 -5.0625 20.492188 -4.800781 20.921875 -4.28125 C 21.285156 -3.820312 21.46875 -3.328125 21.46875 -2.796875 C 21.46875 -2.421875 21.367188 -2.078125 21.171875 -1.765625 C 20.984375 -1.453125 20.707031 -1.210938 20.34375 -1.046875 C 18.476562 -0.109375 16.488281 0.359375 14.375 0.359375 C 12.03125 0.359375 9.875 -0.132812 7.90625 -1.125 C 5.945312 -2.125 4.378906 -3.59375 3.203125 -5.53125 C 2.023438 -7.476562 1.4375 -9.828125 1.4375 -12.578125 C 1.4375 -15.023438 1.992188 -17.21875 3.109375 -19.15625 C 4.222656 -21.101562 5.757812 -22.617188 7.71875 -23.703125 C 9.6875 -24.796875 11.90625 -25.34375 14.375 -25.34375 C 16.507812 -25.34375 18.488281 -24.875 20.3125 -23.9375 Z M 20.3125 -23.9375 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(338.186211, 109.83097)"><g><path d="M 20.921875 -25.171875 C 21.597656 -25.171875 22.140625 -24.960938 22.546875 -24.546875 C 22.953125 -24.140625 23.15625 -23.613281 23.15625 -22.96875 L 23.15625 -2.1875 C 23.15625 -1.570312 22.9375 -1.050781 22.5 -0.625 C 22.070312 -0.207031 21.523438 0 20.859375 0 C 20.253906 0 19.734375 -0.207031 19.296875 -0.625 C 18.867188 -1.050781 18.65625 -1.570312 18.65625 -2.1875 L 18.65625 -10.5625 L 7.1875 -10.5625 L 7.1875 -2.1875 C 7.1875 -1.570312 6.957031 -1.050781 6.5 -0.625 C 6.050781 -0.207031 5.523438 0 4.921875 0 C 4.273438 0 3.742188 -0.207031 3.328125 -0.625 C 2.910156 -1.050781 2.703125 -1.570312 2.703125 -2.1875 L 2.703125 -22.96875 C 2.703125 -23.59375 2.914062 -24.113281 3.34375 -24.53125 C 3.769531 -24.957031 4.320312 -25.171875 5 -25.171875 C 5.59375 -25.171875 6.101562 -24.957031 6.53125 -24.53125 C 6.96875 -24.113281 7.1875 -23.59375 7.1875 -22.96875 L 7.1875 -14.703125 L 18.65625 -14.703125 L 18.65625 -22.96875 C 18.65625 -23.59375 18.882812 -24.113281 19.34375 -24.53125 C 19.800781 -24.957031 20.328125 -25.171875 20.921875 -25.171875 Z M 20.921875 -25.171875 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(173.671908, 146.041391)"><g><path d="M 14.375 -15.375 C 14.78125 -15.375 15.113281 -15.242188 15.375 -14.984375 C 15.632812 -14.722656 15.765625 -14.382812 15.765625 -13.96875 L 15.765625 -1.390625 C 15.765625 -1.003906 15.632812 -0.675781 15.375 -0.40625 C 15.113281 -0.132812 14.78125 0 14.375 0 C 13.96875 0 13.632812 -0.128906 13.375 -0.390625 C 13.125 -0.648438 13 -0.984375 13 -1.390625 L 13 -2.140625 C 12.5 -1.460938 11.8125 -0.882812 10.9375 -0.40625 C 10.070312 0.0625 9.140625 0.296875 8.140625 0.296875 C 6.828125 0.296875 5.632812 -0.0390625 4.5625 -0.71875 C 3.488281 -1.394531 2.644531 -2.335938 2.03125 -3.546875 C 1.425781 -4.753906 1.125 -6.113281 1.125 -7.625 C 1.125 -9.125 1.425781 -10.476562 2.03125 -11.6875 C 2.644531 -12.894531 3.484375 -13.835938 4.546875 -14.515625 C 5.609375 -15.191406 6.773438 -15.53125 8.046875 -15.53125 C 9.078125 -15.53125 10.03125 -15.316406 10.90625 -14.890625 C 11.78125 -14.460938 12.476562 -13.921875 13 -13.265625 L 13 -13.96875 C 13 -14.375 13.125 -14.707031 13.375 -14.96875 C 13.632812 -15.238281 13.96875 -15.375 14.375 -15.375 Z M 8.453125 -2.265625 C 9.367188 -2.265625 10.175781 -2.492188 10.875 -2.953125 C 11.582031 -3.421875 12.132812 -4.054688 12.53125 -4.859375 C 12.925781 -5.671875 13.125 -6.59375 13.125 -7.625 C 13.125 -8.625 12.925781 -9.53125 12.53125 -10.34375 C 12.132812 -11.15625 11.582031 -11.796875 10.875 -12.265625 C 10.175781 -12.742188 9.367188 -12.984375 8.453125 -12.984375 C 7.546875 -12.984375 6.738281 -12.75 6.03125 -12.28125 C 5.332031 -11.820312 4.785156 -11.1875 4.390625 -10.375 C 3.992188 -9.5625 3.796875 -8.644531 3.796875 -7.625 C 3.796875 -6.59375 3.992188 -5.671875 4.390625 -4.859375 C 4.785156 -4.054688 5.332031 -3.421875 6.03125 -2.953125 C 6.738281 -2.492188 7.546875 -2.265625 8.453125 -2.265625 Z M 8.453125 -2.265625 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(191.453666, 146.041391)"><g><path d="M 8.65625 -15.53125 C 10.1875 -15.53125 11.457031 -15.285156 12.46875 -14.796875 C 13.476562 -14.316406 13.984375 -13.703125 13.984375 -12.953125 C 13.984375 -12.617188 13.878906 -12.320312 13.671875 -12.0625 C 13.460938 -11.800781 13.191406 -11.671875 12.859375 -11.671875 C 12.609375 -11.671875 12.410156 -11.707031 12.265625 -11.78125 C 12.117188 -11.863281 11.921875 -11.992188 11.671875 -12.171875 C 11.554688 -12.285156 11.375 -12.421875 11.125 -12.578125 C 10.894531 -12.691406 10.566406 -12.785156 10.140625 -12.859375 C 9.710938 -12.941406 9.328125 -12.984375 8.984375 -12.984375 C 7.972656 -12.984375 7.082031 -12.75 6.3125 -12.28125 C 5.539062 -11.820312 4.941406 -11.179688 4.515625 -10.359375 C 4.085938 -9.535156 3.875 -8.625 3.875 -7.625 C 3.875 -6.59375 4.082031 -5.671875 4.5 -4.859375 C 4.914062 -4.054688 5.5 -3.421875 6.25 -2.953125 C 7.007812 -2.492188 7.867188 -2.265625 8.828125 -2.265625 C 9.835938 -2.265625 10.648438 -2.414062 11.265625 -2.71875 C 11.398438 -2.800781 11.582031 -2.925781 11.8125 -3.09375 C 12.007812 -3.25 12.179688 -3.363281 12.328125 -3.4375 C 12.472656 -3.519531 12.648438 -3.5625 12.859375 -3.5625 C 13.242188 -3.5625 13.546875 -3.441406 13.765625 -3.203125 C 13.992188 -2.960938 14.109375 -2.648438 14.109375 -2.265625 C 14.109375 -1.859375 13.851562 -1.457031 13.34375 -1.0625 C 12.832031 -0.664062 12.144531 -0.335938 11.28125 -0.078125 C 10.425781 0.171875 9.503906 0.296875 8.515625 0.296875 C 7.046875 0.296875 5.75 -0.046875 4.625 -0.734375 C 3.507812 -1.421875 2.644531 -2.367188 2.03125 -3.578125 C 1.425781 -4.785156 1.125 -6.132812 1.125 -7.625 C 1.125 -9.101562 1.441406 -10.445312 2.078125 -11.65625 C 2.722656 -12.863281 3.613281 -13.8125 4.75 -14.5 C 5.882812 -15.1875 7.1875 -15.53125 8.65625 -15.53125 Z M 8.65625 -15.53125 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(206.339377, 146.041391)"><g><path d="M 14.375 -15.375 C 14.78125 -15.375 15.113281 -15.242188 15.375 -14.984375 C 15.632812 -14.722656 15.765625 -14.382812 15.765625 -13.96875 L 15.765625 -1.390625 C 15.765625 -1.003906 15.632812 -0.675781 15.375 -0.40625 C 15.113281 -0.132812 14.78125 0 14.375 0 C 13.96875 0 13.632812 -0.128906 13.375 -0.390625 C 13.125 -0.648438 13 -0.984375 13 -1.390625 L 13 -2.140625 C 12.5 -1.460938 11.8125 -0.882812 10.9375 -0.40625 C 10.070312 0.0625 9.140625 0.296875 8.140625 0.296875 C 6.828125 0.296875 5.632812 -0.0390625 4.5625 -0.71875 C 3.488281 -1.394531 2.644531 -2.335938 2.03125 -3.546875 C 1.425781 -4.753906 1.125 -6.113281 1.125 -7.625 C 1.125 -9.125 1.425781 -10.476562 2.03125 -11.6875 C 2.644531 -12.894531 3.484375 -13.835938 4.546875 -14.515625 C 5.609375 -15.191406 6.773438 -15.53125 8.046875 -15.53125 C 9.078125 -15.53125 10.03125 -15.316406 10.90625 -14.890625 C 11.78125 -14.460938 12.476562 -13.921875 13 -13.265625 L 13 -13.96875 C 13 -14.375 13.125 -14.707031 13.375 -14.96875 C 13.632812 -15.238281 13.96875 -15.375 14.375 -15.375 Z M 8.453125 -2.265625 C 9.367188 -2.265625 10.175781 -2.492188 10.875 -2.953125 C 11.582031 -3.421875 12.132812 -4.054688 12.53125 -4.859375 C 12.925781 -5.671875 13.125 -6.59375 13.125 -7.625 C 13.125 -8.625 12.925781 -9.53125 12.53125 -10.34375 C 12.132812 -11.15625 11.582031 -11.796875 10.875 -12.265625 C 10.175781 -12.742188 9.367188 -12.984375 8.453125 -12.984375 C 7.546875 -12.984375 6.738281 -12.75 6.03125 -12.28125 C 5.332031 -11.820312 4.785156 -11.1875 4.390625 -10.375 C 3.992188 -9.5625 3.796875 -8.644531 3.796875 -7.625 C 3.796875 -6.59375 3.992188 -5.671875 4.390625 -4.859375 C 4.785156 -4.054688 5.332031 -3.421875 6.03125 -2.953125 C 6.738281 -2.492188 7.546875 -2.265625 8.453125 -2.265625 Z M 8.453125 -2.265625 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(224.121136, 146.041391)"><g><path d="M 14.375 -21.4375 C 14.78125 -21.4375 15.113281 -21.304688 15.375 -21.046875 C 15.632812 -20.785156 15.765625 -20.453125 15.765625 -20.046875 L 15.765625 -1.390625 C 15.765625 -1.003906 15.632812 -0.675781 15.375 -0.40625 C 15.113281 -0.132812 
                            14.78125 0 14.375 0 C 13.96875 0 13.632812 -0.128906 13.375 -0.390625 C 13.125 -0.648438 13 -0.984375 13 -1.390625 L 13 -2.203125 C 12.519531 
                            -1.503906 11.835938 -0.910156 10.953125 -0.421875 C 10.078125 0.0546875 9.140625 0.296875 8.140625 0.296875 C 6.828125 0.296875 5.640625 -0.0390625 4.578125 -0.71875 C 3.515625 -1.394531 2.671875 -2.335938 2.046875 -3.546875 C 1.429688 -4.753906 1.125 -6.113281 1.125 -7.625 C 1.125 -9.125 1.425781 -10.476562 2.03125 -11.6875 C 2.644531 -12.894531 3.484375 -13.835938 4.546875 -14.515625 C 5.609375 -15.191406 6.773438 -15.53125 8.046875 -15.53125 C 9.078125 -15.53125 10.023438 -15.316406 10.890625 -14.890625 C 11.765625 -14.460938 12.46875 -13.910156 13 -13.234375 L 13 -20.046875 C 13 -20.453125 13.125 -20.785156 13.375 -21.046875 C 13.632812 -21.304688 13.96875 -21.4375 14.375 -21.4375 Z M 8.453125 -2.265625 C 9.367188 -2.265625 10.175781 -2.492188 10.875 -2.953125 C 11.582031 -3.421875 12.132812 -4.054688 12.53125 -4.859375 C 12.925781 -5.671875 13.125 -6.59375 13.125 -7.625 C 13.125 -8.625 12.925781 -9.535156 12.53125 -10.359375 C 12.132812 -11.179688 11.582031 -11.820312 10.875 -12.28125 C 10.175781 -12.75 9.367188 -12.984375 8.453125 -12.984375 C 7.546875 -12.984375 6.738281 -12.75 6.03125 -12.28125 C 5.332031 -11.820312 4.785156 -11.179688 4.390625 -10.359375 C 3.992188 -9.535156 3.796875 -8.625 3.796875 -7.625 C 3.796875 -6.59375 3.992188 -5.671875 4.390625 -4.859375 C 4.785156 -4.054688 5.332031 -3.421875 6.03125 -2.953125 C 6.738281 -2.492188 7.546875 -2.265625 8.453125 -2.265625 Z M 8.453125 -2.265625 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(241.902894, 146.041391)"><g><path d="M 15.375 -8.171875 C 15.363281 -7.816406 15.222656 -7.519531 14.953125 -7.28125 C 14.679688 -7.039062 14.359375 -6.921875 13.984375 -6.921875 L 3.796875 -6.921875 C 3.929688 -5.515625 4.46875 -4.382812 5.40625 -3.53125 C 6.34375 -2.6875 7.484375 -2.265625 8.828125 -2.265625 C 9.753906 -2.265625 10.507812 -2.398438 11.09375 -2.671875 C 11.675781 -2.941406 12.1875 -3.285156 12.625 -3.703125 C 12.914062 -3.878906 13.195312 -3.96875 13.46875 -3.96875 C 13.800781 -3.96875 14.078125 -3.851562 14.296875 -3.625 C 14.515625 -3.394531 14.625 -3.125 14.625 -2.8125 C 14.625 -2.40625 14.429688 -2.035156 14.046875 -1.703125 C 13.484375 -1.148438 12.738281 -0.675781 11.8125 -0.28125 C 10.882812 0.101562 9.941406 0.296875 8.984375 0.296875 C 7.421875 0.296875 6.046875 -0.03125 4.859375 -0.6875 C 3.671875 -1.351562 2.75 -2.273438 2.09375 -3.453125 C 1.445312 -4.628906 1.125 -5.957031 1.125 -7.4375 C 1.125 -9.0625 1.457031 -10.488281 2.125 -11.71875 C 2.789062 -12.945312 3.671875 -13.890625 4.765625 -14.546875 C 5.859375 -15.203125 7.03125 -15.53125 8.28125 -15.53125 C 9.519531 -15.53125 10.679688 -15.207031 11.765625 -14.5625 C 12.847656 -13.925781 13.71875 -13.046875 14.375 -11.921875 C 15.03125 -10.804688 15.363281 -9.554688 15.375 -8.171875 Z M 8.28125 -12.984375 C 7.195312 -12.984375 6.257812 -12.675781 5.46875 -12.0625 C 4.675781 -11.457031 4.15625 -10.515625 3.90625 -9.234375 L 12.453125 -9.234375 L 12.453125 -9.46875 C 12.359375 -10.5 11.898438 -11.34375 11.078125 -12 C 10.253906 -12.65625 9.320312 -12.984375 8.28125 -12.984375 Z M 8.28125 -12.984375 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(258.410395, 146.041391)"><g><path d="M 19.46875 -15.4375 C 22.84375 -15.4375 24.53125 -13.332031 24.53125 -9.125 L 24.53125 -1.390625 C 24.53125 -0.984375 24.40625 -0.648438 24.15625 -0.390625 C 23.90625 -0.128906 23.578125 0 23.171875 0 C 22.765625 0 22.429688 -0.132812 22.171875 -0.40625 C 21.910156 -0.675781 21.78125 -1.003906 21.78125 -1.390625 L 21.78125 -9.09375 C 21.78125 -11.625 20.71875 -12.890625 18.59375 -12.890625 C 17.84375 -12.890625 17.160156 -12.71875 16.546875 -12.375 C 15.941406 -12.039062 15.46875 -11.582031 15.125 -11 C 14.789062 -10.425781 14.625 -9.789062 14.625 -9.09375 L 14.625 -1.390625 C 14.625 -1.003906 14.492188 -0.675781 14.234375 -0.40625 C 13.972656 -0.132812 13.640625 0 13.234375 0 C 12.828125 0 12.5 -0.128906 12.25 -0.390625 C 12 -0.648438 11.875 -0.984375 11.875 -1.390625 L 11.875 -9.125 C 11.875 -10.257812 11.628906 -11.171875 11.140625 -11.859375 C 10.660156 -12.546875 9.863281 -12.890625 8.75 -12.890625 C 7.613281 -12.890625 6.671875 -12.523438 5.921875 -11.796875 C 5.179688 -11.078125 4.8125 -10.1875 4.8125 -9.125 L 4.8125 -1.390625 C 4.8125 -1.003906 4.679688 -0.675781 4.421875 -0.40625 C 4.160156 -0.132812 3.828125 0 3.421875 0 C 3.015625 0 2.6875 -0.128906 2.4375 -0.390625 C 2.1875 -0.648438 2.0625 -0.984375 2.0625 -1.390625 L 2.0625 -13.796875 C 2.0625 -14.179688 2.191406 -14.503906 2.453125 -14.765625 C 2.710938 -15.035156 3.035156 -15.171875 3.421875 -15.171875 C 3.828125 -15.171875 4.160156 -15.035156 4.421875 -14.765625 C 4.679688 -14.503906 4.8125 -14.179688 4.8125 -13.796875 L 4.8125 -12.78125 C 5.3125 -13.53125 5.976562 -14.160156 6.8125 -14.671875 C 7.65625 -15.179688 8.570312 -15.4375 9.5625 -15.4375 C 11.957031 -15.4375 13.507812 -14.375 14.21875 -12.25 C 14.644531 -13.0625 15.347656 -13.796875 16.328125 -14.453125 C 17.316406 -15.109375 18.363281 -15.4375 19.46875 -15.4375 Z M 19.46875 -15.4375 "/></g></g></g><g fill="#1d1ea2" fill-opacity="1"><g transform="translate(284.996153, 146.041391)"><g><path d="M 13.359375 -15.328125 C 13.765625 -15.328125 14.097656 -15.191406 14.359375 -14.921875 C 14.617188 -14.648438 14.75 -14.320312 14.75 -13.9375 L 14.75 -1.421875 C 14.75 0.992188 14.082031 2.800781 12.75 4 C 11.414062 5.195312 9.65625 5.796875 7.46875 5.796875 C 6.757812 5.796875 6.054688 5.726562 5.359375 5.59375 C 4.660156 5.457031 4.09375 5.273438 3.65625 5.046875 C 2.9375 4.710938 2.578125 4.265625 2.578125 3.703125 C 2.578125 3.609375 2.597656 3.484375 2.640625 3.328125 C 2.753906 3.003906 2.914062 2.753906 3.125 2.578125 C 3.34375 2.398438 3.585938 2.3125 3.859375 2.3125 C 4.003906 2.3125 4.144531 2.34375 4.28125 2.40625 C 4.882812 2.675781 5.414062 2.890625 5.875 3.046875 C 6.34375 3.203125 6.882812 3.28125 7.5 3.28125 C 10.5 3.28125 12 1.742188 12 -1.328125 L 12 -1.90625 C 11.46875 -1.21875 10.789062 -0.675781 9.96875 -0.28125 C 9.15625 0.101562 8.21875 0.296875 7.15625 0.296875 C 5.550781 0.296875 4.300781 -0.210938 3.40625 -1.234375 C 2.507812 -2.265625 2.0625 -3.609375 2.0625 -5.265625 L 2.0625 -13.9375 C 2.0625 -14.34375 2.1875 -14.675781 2.4375 -14.9375 C 2.6875 -15.195312 3.015625 -15.328125 3.421875 -15.328125 C 3.828125 -15.328125 4.160156 -15.191406 4.421875 -14.921875 C 4.679688 -14.648438 4.8125 -14.320312 4.8125 -13.9375 L 4.8125 -6 C 4.8125 -4.71875 5.085938 -3.773438 5.640625 -3.171875 C 6.203125 -2.566406 7.054688 -2.265625 8.203125 -2.265625 C 9.296875 -2.265625 10.203125 -2.609375 10.921875 -3.296875 C 11.640625 -3.992188 12 -4.894531 12 -6 L 12 -13.9375 C 12 -14.34375 12.125 -14.675781 12.375 -14.9375 C 12.625 -15.195312 12.953125 
                            -15.328125 13.359375 -15.328125 Z M 13.359375 -15.328125 "/></g></g></g></svg>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Start Menu  -->
        <div class="panel-search-content" style='height:90%;'>
            <ul class="ps-container main-menu-content scroll-area ps ps--active-y">
                <ul class="navigation navigation-main">
                    
                    <?php  foreach ($menus as $menu) {
                            $has_sub_class="";
                            if(count($menu->items) >0 ){
                                $has_sub_class = "has-sub";
                        } ?>      
                            <li class="nav-item <?php echo $has_sub_class?>">
                                <a target="_self" class="d-flex align-items-center"  data-order="<?=$menu->order_id?>"  data-id="<?=$menu->id?>">
                                        <i class="<?php echo $menu->icon_class_name?> menu-icon"></i>
                                        <span class="menu-title text-truncate"><?php echo $menu->text?></span>
                                </a>

                                <ul class="menu-content collapse">

                                    <?php foreach ($menu->items as $childMenu){
                                        $children_has_sub_class="";
                                        $children_open_sub_class = "";
                                        if(count($childMenu->items) >0 ){
                                            $children_has_sub_class = "has-sub";
                                            if($childMenu->controller_name."/".$childMenu->action_name == $controllerAction){
                                                $children_open_sub_class="open sidebar-group-active";
                                            }
                                        }else{
                                            if($childMenu->controller_name."/".$childMenu->action_name == $controllerAction){
                                                $children_open_sub_class="active";
                                            }
                                        } ?>
                                        <li class="nav-item <?php echo $children_has_sub_class;echo $children_open_sub_class?>">
                                            <a  href="<?=site_url($childMenu->action_name)?>" class="d-flex align-items-center" data-order="<?=$childMenu->order_id?>" data-id="<?=$childMenu->id?>">
                                                <i class="<?php echo $childMenu->icon_class_name?> menu-icon"></i>
                                                <span class="menu-title text-truncate"><?php echo $childMenu->text?></span>
                                            </a>

                                            <?php if(count($childMenu->items) >0 ){ ?>
                                                <ul class="menu-content collapse">

                                                    <?php

                                                        foreach ($childMenu->items as $childChildMenu){
                                                    ?>
                                                            <li class="nav-item">
                                                                <a href="<?=site_url($childChildMenu->action_name)?>" class="d-flex align-items-center" data-order="<?=$childChildMenu->order_id?>" data-id="<?=$childChildMenu->id?>">
                                                                <?php 
                                                                    if($childChildMenu->icon_class_name == "" ){
                                                                ?> 
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                <?php
                                                                    }
                                                                ?>
                                                                    <span class="menu-title text-truncate">@childChildMenu.text</span>
                                                                </a>
                                                            </li>
                                                    <?php
                                                        }
                                                    ?>
                                                </ul>   
                                            <?php } ?>
                                        </li>
        
                                    <?php } ?>
                                </ul>
                            </li>   
                    <?php } ?>
                </ul>
            </ul>
        </div>
    </div>
    <!-- <div id="loading_panel"></div>  -->
    <div class="app-content content">
    
        <div class="content-wrapper">
        
            <div class="content-body">

       

<script>
    // var usersArray = JSON.parse('@Json.Serialize(@Model)');
</script>

</html>