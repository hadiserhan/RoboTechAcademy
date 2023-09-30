<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/ext/jquery-ui/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/ext/jquery-qtip/jquery.qtip.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/ext/trumbowyg/ui/trumbowyg.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/backend.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/general.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/js/country/css/bootstrap-select-country.min.css') ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css?').time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/myCustom.css?').time(); ?>">
    <script src="<?= base_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/bootstrap/js/bootstrap.min.js') ?>"></script>

    
    <script src="<?= base_url('assets/ext/jquery-qtip/jquery.qtip.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/datejs/date.js') ?>"></script>
    <script src="<?= base_url('assets/ext/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
    <script src="<?= base_url('assets/ext/trumbowyg/trumbowyg.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.5.0/dist/alpine.js" defer></script>

    <script>
    	// Global JavaScript Variables - Used in all backend pages.

        let siteurl = "<?=site_url()?>";
        let baseurl = "<?=base_url()?>";

        let isMessenger = 0;
        let currentContactId;
        let current_userid_roles;
        var CompanyType = {

            Medicine: 1,
            Dentistry: 2,
            Veterinary: 3
        };
        var ApptConfirmed = {
            NeedAction: 1,
            Confirmed: 2,
            NoAnswer: 3,
            Canceled: 4,
            Rescheduled: 5
        };

        const PET_TYPE_COLUMN_NUM = 2;
        const HIPPA_CONSENT_COLUMN_NUM = 10;
        const TAGS_COLUMN_NUM = 11;
        const IMPORT_PET_NAME_COLUMN_NUM = 0;
        const IMPORT_PET_TYPE_COLUMN_NUM = 1;
        const IMPORT_HIPPA_CONSENT_COLUMN_NUM = 8;
        const SEND_HIPPA_CONSENT_MESSAGE_LI_NUM = 1;
        var gI_CompanyTypeId;

        $(document).ready(function() {

            let lJQ_CompanyName = $('select[name="companyname"]');
            let lJQ_SelectedOption = lJQ_CompanyName.find('option:selected');
            gI_CompanyTypeId = lJQ_SelectedOption.data('company_type_id');

            $('[data-toggle="menu_tooltip"]').tooltip();

            $(".sidebar-menu").on("show.bs.tooltip", function(e) {
                if (!$('body').hasClass("menu-collapse")) {
                    return false;
                }
            });

        });
       
    </script>

    <style type="text/css">
        #modal-incoming-calls .modal-body{
            text-align:center;
        }
        #modal-incoming-calls button{
            border-radius: 57px;
            height: 60px;
            width: 60px;
            margin: 0px 20px;
        }
        #modal-incoming-calls button svg{
            margin-top:7px;
        }
        #modal-incoming-calls #button-hangup svg{
            transform:rotate(100deg);
        }
         .btn-profile img{
             height:80px;
         }
    </style>
</head>

<body>
<nav id="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="header-wrapper">
                <div class="logo-brand">
                    <a href="#" class="tablet-logo" role="button">
                        <img src="<?= base_url('assets/img/new/logo.svg') ?>" />
                    </a>
                    <a href="#" role="button">
                        <img style="width:179px" src="<?= base_url('assets/img/new/logo.png') ?>" />
                    </a>
                    <button class="toggle"><svg width="32" height="32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15" fill="#fff" stroke="#F2F3F7" stroke-width="2"/><path d="M18.4 19.7A.8.8 0 0118 21a.7.7 0 01-.5-.2l-4.2-4.3a.8.8 0 010-1l4.2-4.3a.7.7 0 011 0 .8.8 0 010 1L15 16l3.4 3.7z" fill="#89959F"/></svg></button>
                </div>
                <form action="#">
                <?php /* <input type="text" class="search" name="search" placeholder="Search..." />*/?>
                </form>
                <div class="right-menu">
                    <ul>
                        
                    <li class="account-dropdown__container" style="display:block">
                        
                        <select name="companyname" id="" class="account-dropdown"  onchange="switchAdminCompany(this.value)">
                            <option value="">Select Company</option>
                        </select>
                    </li>
                        <li x-data="{ open: false }" class="option-menu__container">
                            <button @click="open = true" class="btn-menu"><svg width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 0a18 18 0 100 36 18 18 0 000-36zm9 19.8h-7.2V27h-3.6v-7.2H9v-3.6h7.2V9h3.6v7.2H27v3.6z" fill="#1485FE"/></svg></button>
                            <div
                                x-show="open"
                                @click.away="open = false"
                                class="option-menu"
                                style="display:none;"
                            >
                                <ul>
                                    <li><a href="<?php echo base_url();?>index.php/backend/contacts/add"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 3.8L4.2.6a2 2 0 013 0L10.6 4a2 2 0 010 3L8 9.7a12.2 12.2 0 006.4 6.4l2.7-2.7a2 2 0 013 0l3.4 3.4a2 2 0 010 3L20.2 23a3.6 3.6 0 01-3.1 1c-4-.7-8-2.8-11.1-6A20.9 20.9 0 010 6.9C0 5.8.2 4.6 1 3.8zm1.2 2.7c.6 3.6 2.5 7.1 5.3 10 2.9 2.8 6.4 4.7 10 5.3.4.1.9 0 1.2-.4l3.1-3.1-3.3-3.3-3.6 3.6-.7-.2a14.4 14.4 0 01-8.6-8.6L5.4 9 9 5.5 5.7 2.2 2.6 5.3c-.4.3-.5.8-.4 1.2z" fill="#89959F"/></svg> Contact</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/backend/scheduleappointment/"><svg width="22" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.2 2.4H18V0h-2.4v2.4H6V0H3.6v2.4H2.4A2.4 2.4 0 000 4.8v16.8A2.4 2.4 0 002.4 24h16.8a2.4 2.4 0 002.4-2.4V4.8a2.4 2.4 0 00-2.4-2.4zm0 19.2H2.4v-12h16.8v12zM2.4 7.2V4.8h16.8v2.4H2.4zm6.7 12.6l7.1-7.2-1.3-1.2-5.8 5.8-2.6-2.5-1.2 1.2L9 19.8z" fill="#89959F"/></svg> Appointment</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/backend/messenger/">
                                    <svg width="24" height="23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.3 14.4h9.1a1.2 1.2 0 001.2-1.2V3.6a1.2 1.2 0 00-1.2-1.2H3.6a1.2 1.2 0 00-1.2 1.2v9.6a1.2 1.2 0 001.2 1.2 1.2 1.2 0 011.2 1.2v3.6l6.5-4.8zM3.6 0h16.8A3.6 3.6 0 0124 3.6v9.6a3.6 3.6 0 01-3.6 3.6h-8.3l-7.8 5.8a1.2 1.2 0 01-1.9-1v-4.8A2.4 2.4 0 010 14.4V3.6A3.6 3.6 0 013.6 0z" fill="#89959F"/></svg> Message</a></li>
                                </ul>
                            </div>
                        </li> 

                        <li>
                            <div
                              x-data="{ open: false }" 
                              class="profile__menu-container">
                                <button  
                                    @click="open = true" 
                                    class="btn-profile">
                                    <img src="<?= base_url('assets/img/male-icon.png') ?>" alt="Your Profile Image" />
                                    <span>Hadi Serhan</span>
                                    <svg width="15" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3.3a1 1 0 011.9.8 1 1 0 01-.4.7l-6 5.9a1 1 0 01-1.5 0l-6-5.9A1 1 0 01.3.3a1 1 0 011.5 0l5.3 4.8L12.3.3z" fill="#89959F"/></svg>
                                </button>
                                <div
                                    x-show="open"
                                    @click.away="open = false"
                                    class="profile-menu"
                                    style="display:none;"
                                    >
                                    <ul>
                                        <li><a href="<?php echo base_url("/index.php/user/logout/")?>">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>
    </div>
</nav>
<div id="notification" style="display: none;"></div>

<div id="loading" style="display: none;">
    <div class="any-element animation is-loading">
        &nbsp;
    </div>
</div>

<div class="content-wrapper">
    <aside class="sidebar-menu">

        <h3 class="separator"><span>Main</span></h3>

        <ul>
        
            <li <?php echo ($nav == 'dashboard')? 'class="active"':'' ?>>
                <a  data-toggle="menu_tooltip" data-placement="right" title="Dashboard" href="<?=site_url("backend")?>"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.4 2.4V9H9V2.4H2.4zM0 2.2C0 1 1 0 2.2 0h7.1c1.2 0 2.2 1 2.2 2.2v7.1c0 1.2-1 2.2-2.2 2.2h-7C1 11.5 0 10.5 0 9.3v-7zm14.9.2V9h6.7V2.4H15zm-2.4-.2c0-1.2 1-2.2 2.2-2.2h7C23 0 24 1 24 2.2v7.1c0 1.2-1 2.2-2.2 2.2h-7.1c-1.2 0-2.2-1-2.2-2.2v-7zM2.4 15v6.7H9V15H2.4zM0 14.7c0-1.2 1-2.2 2.2-2.2h7.1c1.2 0 2.2 1 2.2 2.2v7c0 1.3-1 2.3-2.2 2.3h-7C1 24 0 23 0 21.8v-7.1zm14.9.2v6.7h6.7V15H15zm-2.4-.2c0-1.2 1-2.2 2.2-2.2h7c1.3 0 2.3 1 2.3 2.2v7c0 1.3-1 2.3-2.2 2.3h-7.1c-1.2 0-2.2-1-2.2-2.2v-7.1z" fill="#89959F"/></svg> <span>Dashboard</span></a>
            </li>
            <li <?php echo ($nav == 'contacts')? 'class="active"':'' ?>>
                <a data-toggle="menu_tooltip" data-placement="right" title="Contacts"  href="<?=site_url("backend/contacts")?>"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 3.8L4.2.6a2 2 0 013 0L10.6 4a2 2 0 010 3L8 9.7a12.2 12.2 0 006.4 6.4l2.7-2.7a2 2 0 013 0l3.4 3.4a2 2 0 010 3L20.2 23a3.6 3.6 0 01-3.1 1c-4-.7-8-2.8-11.1-6A20.9 20.9 0 010 6.9C0 5.8.2 4.6 1 3.8zm1.2 2.7c.6 3.6 2.5 7.1 5.3 10 2.9 2.8 6.4 4.7 10 5.3.4.1.9 0 1.2-.4l3.1-3.1-3.3-3.3-3.6 3.6-.7-.2a14.4 14.4 0 01-8.6-8.6L5.4 9 9 5.5 5.7 2.2 2.6 5.3c-.4.3-.5.8-.4 1.2z" fill="#89959F"/></svg> <span>Contacts</span></a>
            </li>


            <li <?php echo ($nav == 'rm_contacts')? 'class="active"':'' ?>>
                    <a data-toggle="menu_tooltip" data-placement="right" title="Randomized Messages Contacts"  href="<?=site_url("backend/randomized_messages_contacts")?>">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.8L4.2.6a2 2 0 013 0L10.6 4a2 2 0 010 3L8 9.7a12.2 12.2 0 006.4 6.4l2.7-2.7a2 2 0 013 0l3.4 3.4a2 2 0 010 3L20.2 23a3.6 3.6 0 01-3.1 1c-4-.7-8-2.8-11.1-6A20.9 20.9 0 010 6.9C0 5.8.2 4.6 1 3.8zm1.2 2.7c.6 3.6 2.5 7.1 5.3 10 2.9 2.8 6.4 4.7 10 5.3.4.1.9 0 1.2-.4l3.1-3.1-3.3-3.3-3.6 3.6-.7-.2a14.4 14.4 0 01-8.6-8.6L5.4 9 9 5.5 5.7 2.2 2.6 5.3c-.4.3-.5.8-.4 1.2z" fill="#89959F"/>
                        </svg>
                        <span>RM Contacts</span>
                    </a>
                </li>

                <li <?php echo ($nav == 'rm_reports')? 'class="active"':'' ?>>
                    <a data-toggle="menu_tooltip" data-placement="right" title="Randomized Messages Reports"  href="<?=site_url("backend/randomized_messages_reports")?>">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.8 0H1.2A1.2 1.2 0 000 1.2v21.6A1.2 1.2 0 001.2 24h21.6a1.2 1.2 0 001.2-1.2V1.2A1.2 1.2 0 0022.8 0zm-8.4 21.6h-12v-8.4h12v8.4zm0-10.8h-12V2.4h12v8.4zm7.2 10.8h-4.8V2.4h4.8v19.2z" fill="#89959F"/>
                        </svg> 
                        <span>RM Reports</span>
                    </a>
                </li>


            
            <li <?php echo ($nav == 'messenger')? 'class="active"':'' ?>>
                <a data-toggle="menu_tooltip" data-placement="right" title="Messenger" href="<?=site_url("backend/messenger")?>"><svg width="24" height="23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.3 14.4h9.1a1.2 1.2 0 001.2-1.2V3.6a1.2 1.2 0 00-1.2-1.2H3.6a1.2 1.2 0 00-1.2 1.2v9.6a1.2 1.2 0 001.2 1.2 1.2 1.2 0 011.2 1.2v3.6l6.5-4.8zM3.6 0h16.8A3.6 3.6 0 0124 3.6v9.6a3.6 3.6 0 01-3.6 3.6h-8.3l-7.8 5.8a1.2 1.2 0 01-1.9-1v-4.8A2.4 2.4 0 010 14.4V3.6A3.6 3.6 0 013.6 0z" fill="#89959F"/></svg> <span>Messenger</span> 
                    <span class="count unread-count" style="display:none">0</span>
                </a>
            </li>

            
            <li <?php echo ($nav == 'messaging')? 'class="active"':'' ?>>
                <a data-toggle="menu_tooltip" data-placement="right" title="Messaging" href="<?=site_url("backend/messaging")?>">
                    <svg viewBox="64 64 896 896" width="24" height="23" fill="none" focusable="false" class="" aria-hidden="true"><path d="M464 512a48 48 0 1096 0 48 48 0 10-96 0zm200 0a48 48 0 1096 0 48 48 0 10-96 0zm-400 0a48 48 0 1096 0 48 48 0 10-96 0zm661.2-173.6c-22.6-53.7-55-101.9-96.3-143.3a444.35 444.35 0 00-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9a445.35 445.35 0 00-142 96.5c-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9A449.4 449.4 0 00112 714v152a46 46 0 0046 46h152.1A449.4 449.4 0 00510 960h2.1c59.9 0 118-11.6 172.7-34.3a444.48 444.48 0 00142.8-95.2c41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5.3-60.9-11.5-120-34.8-175.6zm-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-.6 99.6-39.7 192.9-110.1 262.7z" fill="#89959F"></path></svg>
                    <span>Messaging</span> 
                </a>
            <!--
            <li <?php echo ($nav == 'zoom')? 'class="active"':'' ?>>
                <a href="<?=site_url("backend/zoom")?>"><svg width="24" height="23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.3 14.4h9.1a1.2 1.2 0 001.2-1.2V3.6a1.2 1.2 0 00-1.2-1.2H3.6a1.2 1.2 0 00-1.2 1.2v9.6a1.2 1.2 0 001.2 1.2 1.2 1.2 0 011.2 1.2v3.6l6.5-4.8zM3.6 0h16.8A3.6 3.6 0 0124 3.6v9.6a3.6 3.6 0 01-3.6 3.6h-8.3l-7.8 5.8a1.2 1.2 0 01-1.9-1v-4.8A2.4 2.4 0 010 14.4V3.6A3.6 3.6 0 013.6 0z" fill="#89959F"/></svg> <span>Zoom</span> 
                </a>
            </li>
            -->
        </ul>
        
        <h3 class="separator"><span>Get Them In</span></h3>

        <ul>
            <!-- <li><a href="#"><svg width="22" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.4 3.9l-.2-.4a2.4 2.4 0 00-2-1.1H18V0h-2.4v2.4H6V0H3.6v2.4H2.4a2.4 2.4 0 00-2 1L.2 4l-.2.9v16.8A2.4 2.4 0 002.4 24h16.8a2.4 2.4 0 002.4-2.4V4.8c0-.3 0-.6-.2-1zm-19 17.7V4.8h16.8v16.8H2.4zm8.4-7.3c-2.4 0-7.2 1.3-7.2 4.3v1.8H18v-1.8c0-3-4.8-4.3-7.2-4.3zM6.4 18c.8-.7 2.8-1.3 4.4-1.3 1.6 0 3.6.6 4.4 1.3H6.4zm4.4-4.8c2 0 3.6-1.6 3.6-3.6S12.8 6 10.8 6 7.2 7.6 7.2 9.6s1.6 3.6 3.6 3.6zm0-4.8c.7 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2-1.2-.5-1.2-1.2.5-1.2 1.2-1.2z" fill="#89959F"/></svg> <span>Need To Contact List</span></a></li> -->
            
            <li <?php echo ($nav == 'calendar')? 'class="active"':'' ?>>
                <a data-toggle="menu_tooltip" data-placement="right" title="Appointment Calendar" href="<?=site_url("backend/calendar")?>">
                <svg width="22" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.2 2.4H18V0h-2.4v2.4H6V0H3.6v2.4H2.4A2.4 2.4 0 000 4.8v16.8A2.4 2.4 0 002.4 24h16.8a2.4 2.4 0 002.4-2.4V4.8a2.4 2.4 0 00-2.4-2.4zm0 19.2H2.4v-12h16.8v12zM2.4 7.2V4.8h16.8v2.4H2.4zm6.7 12.6l7.1-7.2-1.3-1.2-5.8 5.8-2.6-2.5-1.2 1.2L9 19.8z" fill="#89959F"/></svg> <span>Appointment Calendar</span>
                <!-- <span class="count">100</span> -->
                </a>
            </li>
            <!--
            <li <?php echo ($nav == 'booking')? 'class="active"':'' ?>>
                <a href="<?=site_url("backend/booking")?>">
                        <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7778 2.23077H16.6667V0H14.4444V2.23077H5.55556V0H3.33333V2.23077H2.22222C1.63285 2.23077 1.06762 2.4658 0.650874 2.88415C0.234126 3.3025 0 3.8699 0 4.46154V20.0769C0 20.6686 0.234126 21.236 0.650874 21.6543C1.06762 22.0727 1.63285 22.3077 2.22222 22.3077H17.7778C18.3672 22.3077 18.9324 22.0727 19.3491 21.6543C19.7659 21.236 20 20.6686 20 20.0769V4.46154C20 3.8699 19.7659 3.3025 19.3491 2.88415C18.9324 2.4658 18.3672 2.23077 17.7778 2.23077ZM17.7778 20.0769H2.22222V8.92308H17.7778V20.0769ZM2.22222 6.69231V4.46154H17.7778V6.69231H2.22222Z" fill="#89959F"/>
                            <path d="M6.15385 13.6538H13.8462V15.5769H6.15385V13.6538Z" fill="#89959F"/>
                            <path d="M10.9615 10.7692V18.4615H9.03846V10.7692H10.9615Z" fill="#89959F"/>
                        </svg>
                         
                         
                         <span>Schedule Appointment</span>
                </a>
            </li>
            -->
            <li <?php echo ($nav == 'scheduleappointment')? 'class="active"':'' ?>>
                <a data-toggle="menu_tooltip" data-placement="right" title="Schedule Appointment" href="<?=site_url("backend/scheduleappointment")?>">
                        <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7778 2.23077H16.6667V0H14.4444V2.23077H5.55556V0H3.33333V2.23077H2.22222C1.63285 2.23077 1.06762 2.4658 0.650874 2.88415C0.234126 3.3025 0 3.8699 0 4.46154V20.0769C0 20.6686 0.234126 21.236 0.650874 21.6543C1.06762 22.0727 1.63285 22.3077 2.22222 22.3077H17.7778C18.3672 22.3077 18.9324 22.0727 19.3491 21.6543C19.7659 21.236 20 20.6686 20 20.0769V4.46154C20 3.8699 19.7659 3.3025 19.3491 2.88415C18.9324 2.4658 18.3672 2.23077 17.7778 2.23077ZM17.7778 20.0769H2.22222V8.92308H17.7778V20.0769ZM2.22222 6.69231V4.46154H17.7778V6.69231H2.22222Z" fill="#89959F"/>
                            <path d="M6.15385 13.6538H13.8462V15.5769H6.15385V13.6538Z" fill="#89959F"/>
                            <path d="M10.9615 10.7692V18.4615H9.03846V10.7692H10.9615Z" fill="#89959F"/>
                        </svg>
                         
                         
                         <span>Schedule Appointment</span>
                </a>
            </li> 

            <li <?php echo ($nav == 'mymeetings')? 'class="active"':'' ?>>
                <a data-toggle="menu_tooltip" data-placement="right" title="My Appointments" href="<?=site_url("backend/mymeetings")?>">
                        
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7165 10.1078H15.7271C16.0129 10.1114 16.3057 10.1114 16.5879 10.1114C16.789 10.1114 17.0007 10.1114 17.2053 10.1114C18.2354 10.1219 19.0715 9.79386 19.7665 9.11651C20.4262 8.47797 20.7755 7.71948 20.8108 6.86574C20.8355 6.24131 20.8319 5.60277 20.8319 4.98539V4.96775C20.8319 4.74903 20.8284 4.48796 20.8319 4.2269C20.8319 3.79298 20.7508 3.36963 20.585 2.93218C20.1087 1.67274 18.814 0.751966 17.5087 0.734326C16.3339 0.720215 15.1486 0.723743 14.0055 0.727271C13.4975 0.727271 12.993 0.730798 12.485 0.730798H12.3086V0.723743H11.1586C10.0367 0.723743 8.87604 0.723743 7.72243 0.720215H7.70832C7.22853 0.720215 6.78402 0.801355 6.33951 0.970693C5.11535 1.4399 4.20163 2.70993 4.16283 3.99406C4.13813 4.83369 4.1346 5.69096 4.15224 6.61173C4.1593 6.94335 4.20869 7.28908 4.29689 7.61012C4.67789 8.98598 5.93381 10.0055 7.35201 10.0831C7.83885 10.1114 8.33628 10.1078 8.81606 10.1043H8.83723C8.96776 10.1043 9.09829 10.1043 9.23235 10.1043C9.41933 10.1043 9.54633 10.1713 9.64864 10.3266C10.1778 11.1309 10.8763 12.1857 11.5748 13.2123C11.6842 13.3746 11.8183 13.5087 11.9523 13.5969C12.1181 13.7062 12.3051 13.7592 12.4886 13.7592C12.8272 13.7592 13.1659 13.5792 13.3882 13.2476C13.9844 12.3586 14.6229 11.399 15.3391 10.3125C15.399 10.2278 15.5013 10.1078 15.7165 10.1078ZM13.9914 8.58028C13.6986 9.02831 13.3952 9.48341 13.1271 9.88558L13.0812 9.95261C12.9789 10.1078 12.8766 10.2631 12.7708 10.4148C12.7461 10.4536 12.7179 10.4924 12.6896 10.5382L12.4921 10.831L12.291 10.5347C12.2628 10.4924 12.2346 10.4536 12.2099 10.4183L11.8677 9.90675C11.5466 9.42696 11.2609 8.99304 10.9681 8.55558C10.7317 8.19574 10.4248 8.0264 10.005 8.0264C10.0014 8.0264 9.99789 8.0264 9.99437 8.0264C9.27468 8.03346 8.50561 8.03699 7.73301 8.02287C7.53898 8.01935 7.25675 7.99112 6.99922 7.87823C6.50885 7.65951 6.23368 7.22205 6.23015 6.64348C6.22309 5.80033 6.21956 4.92895 6.24426 4.06462C6.26543 3.40138 6.78049 2.87926 7.47195 2.81929C7.54957 2.81223 7.63423 2.8087 7.73301 2.8087C9.46166 2.8087 11.1903 2.8087 12.9154 2.8087H17.237C17.5016 2.8087 17.8121 2.8334 18.0908 3.00979C18.4965 3.26733 18.7187 3.6307 18.7293 4.06109C18.7505 4.97834 18.7646 5.80738 18.7399 6.64348C18.7152 7.49017 18.1543 8.02288 17.2794 8.02993H17.2441C16.5174 8.03346 15.7659 8.04051 15.018 8.0264C14.57 8.01935 14.2419 8.19574 13.9914 8.58028Z" fill="#89959F"/>
                            <path d="M7.88663 19.0545C7.66084 18.8463 7.40684 18.6664 7.14225 18.4759L7.12814 18.4653C7.00819 18.3807 6.88824 18.2925 6.7683 18.2043L6.58132 18.0632L6.7683 17.922C7.32922 17.5022 7.7314 16.966 7.96424 16.3239C8.20766 15.6572 8.24294 14.9833 8.07008 14.313C7.89368 13.6322 7.53737 13.0465 7.01525 12.5703C6.39787 12.0058 5.57941 11.6954 4.71508 11.6954C3.78373 11.6954 2.8806 12.0658 2.23147 12.7114C1.54707 13.3958 1.17665 14.4048 1.24367 15.4031C1.29306 16.1087 1.57882 17.1283 2.66893 17.9573L2.8806 18.1196L2.49606 18.3348C1.21898 19.0545 0.414628 20.1199 0.107705 21.5063C-0.019298 22.0849 -0.00518658 22.6635 0.00892484 23.2773C0.0124527 23.4396 0.0159806 23.5878 0.0195084 23.7324C0.0195084 23.8277 0.0442034 23.937 0.0830098 24.0499C0.227652 24.4486 0.629827 24.7202 1.0567 24.7202C1.10256 24.7202 1.15195 24.7167 1.19781 24.7096C1.68466 24.6391 2.05155 24.2404 2.07625 23.7642C2.08683 23.5313 2.08683 23.2914 2.08683 23.0586V23.0339C2.08683 22.8011 2.08683 22.5576 2.09742 22.3213C2.13269 21.4922 2.54545 20.7514 3.22986 20.2857C3.92132 19.8165 4.77153 19.7071 5.56177 19.9823C6.62365 20.3492 7.29042 21.3123 7.30453 22.4906C7.30806 22.6423 7.30453 22.8011 7.30453 22.9316C7.30453 23.2068 7.30453 23.4925 7.31864 23.7677C7.34686 24.2898 7.80549 24.7167 8.34525 24.7167H8.3523C8.88854 24.7132 9.34716 24.2863 9.37185 23.7712C9.39302 23.3197 9.38949 22.8646 9.38596 22.4589C9.37538 21.1077 8.86737 19.9611 7.88663 19.0545ZM6.09095 15.1456C6.09448 15.5266 5.95336 15.8759 5.69936 16.1334C5.44182 16.3945 5.08904 16.5391 4.7045 16.5391H4.69392C3.90721 16.5391 3.30747 15.9464 3.30394 15.1562C3.29689 14.3801 3.9072 13.7627 4.68686 13.7556H4.7045C5.0714 13.7556 5.4136 13.8932 5.67113 14.1472C5.93925 14.4083 6.08742 14.7611 6.09095 15.1456Z" fill="#89959F"/>
                            <path d="M24.9717 22.4765C24.947 20.9031 24.2873 19.6225 23.0032 18.6664C22.8621 18.5606 22.7068 18.4653 22.5587 18.3771L22.5163 18.3524C22.4564 18.3172 22.3964 18.2784 22.3364 18.2431L22.1247 18.109L22.3258 17.9573C23.4124 17.1247 23.6946 16.1087 23.737 15.4031C23.8005 14.4012 23.4265 13.3923 22.7386 12.7079C22.0754 12.0482 21.1969 11.6848 20.2726 11.6848C19.4118 11.6848 18.5899 12.0058 17.9584 12.5879C17.2528 13.237 16.8718 14.0273 16.8189 14.9445C16.7519 16.1652 17.2211 17.153 18.2582 17.9644L18.4629 18.1267L18.1418 18.3136C18.1171 18.3277 18.096 18.3419 18.0748 18.3524C16.8859 19.0192 16.1063 20.007 15.7499 21.2806C15.5453 22.0179 15.5736 22.7587 15.6018 23.5454C15.6053 23.6301 15.6088 23.7183 15.6124 23.803C15.63 24.3075 16.0957 24.7308 16.6354 24.7308H16.6425C17.1717 24.7273 17.6373 24.3039 17.662 23.803C17.6726 23.556 17.6761 23.3055 17.6761 23.0621V23.0374C17.6761 22.8293 17.6761 22.5718 17.6867 22.3248C17.7114 21.7462 17.916 21.2135 18.2865 20.7761C18.6534 20.3421 19.1473 20.0458 19.7117 19.9188C20.4808 19.7459 21.271 19.9188 21.8813 20.388C22.4881 20.8537 22.855 21.5698 22.8903 22.3495C22.9009 22.5823 22.9009 22.8152 22.9009 23.041C22.9009 23.2667 22.9009 23.5243 22.915 23.7747C22.9432 24.311 23.3912 24.7308 23.9416 24.7308C24.4884 24.7308 24.94 24.311 24.9682 23.7747C24.9823 23.3232 24.9752 22.8681 24.9717 22.4765ZM21.6732 15.1527C21.6732 15.9429 21.0735 16.5391 20.2797 16.5391V16.5744L20.2762 16.5391C20.0857 16.5391 19.9022 16.5038 19.7329 16.4368C19.5635 16.3663 19.4118 16.2675 19.2848 16.1405C19.0273 15.8829 18.8862 15.5302 18.8862 15.1491C18.8862 14.7681 19.0308 14.4153 19.2954 14.1543C19.553 13.8968 19.9022 13.7556 20.2762 13.7556C20.2797 13.7556 20.2797 13.7556 20.2832 13.7556C21.0629 13.7592 21.6732 14.373 21.6732 15.1527Z" fill="#89959F"/>
                        </svg>

                         
                         
                         <span>My Appointments</span>
                <!-- <span class="count">100</span> -->
                </a>
            </li>
        </ul>
        <?php if($session->get('role_slug') == "superadmin" || $session->get('role_slug') == "admin"):?>

            <h3 class="separator"><span>Admin</span></h3>

            <ul>
                <li <?php echo ($nav == 'sms')? 'class="active"':'' ?>>
                    <a data-toggle="menu_tooltip" data-placement="right" title="Templates" href="<?=site_url("backend/sms_templates")?>">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.8 0H1.2A1.2 1.2 0 000 1.2v21.6A1.2 1.2 0 001.2 24h21.6a1.2 1.2 0 001.2-1.2V1.2A1.2 1.2 0 0022.8 0zm-8.4 21.6h-12v-8.4h12v8.4zm0-10.8h-12V2.4h12v8.4zm7.2 10.8h-4.8V2.4h4.8v19.2z" fill="#89959F"/>
                        </svg> 
                        <span>Templates</span>
                    </a>
                </li>

                <!-- <li><a href="#"><svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.841 8.26286C21.2317 2.76622 17.2875 0 12 0C6.70978 0 2.76827 2.76621 0.158941 8.26562C0.0542802 8.48724 0 8.72928 0 8.97437C0 9.21946 0.0542802 9.46151 0.158941 9.68313C2.76827 15.1798 6.71253 17.946 12 17.946C17.2902 17.946 21.2317 15.1798 23.841 9.68038C24.053 9.23448 24.053 8.71702 23.841 8.26286ZM12 15.9642C7.56029 15.9642 4.30964 13.7127 2.01685 8.973C4.30964 4.23327 7.56029 1.98177 12 1.98177C16.4397 1.98177 19.6903 4.23327 21.9831 8.973C19.6931 13.7127 16.4425 15.9642 12 15.9642ZM11.8899 4.12868C9.21451 4.12868 7.04558 6.29761 7.04558 8.973C7.04558 11.6484 9.21451 13.8173 11.8899 13.8173C14.5653 13.8173 16.7342 11.6484 16.7342 8.973C16.7342 6.29761 14.5653 4.12868 11.8899 4.12868ZM11.8899 12.0557C10.1861 12.0557 8.80715 10.6768 8.80715 8.973C8.80715 7.26923 10.1861 5.89025 11.8899 5.89025C13.5937 5.89025 14.9726 7.26923 14.9726 8.973C14.9726 10.6768 13.5937 12.0557 11.8899 12.0557Z" fill="#89959F"/></svg> <span>God View</span></a></li> -->
                
                <li <?php echo ($nav == 'my-account')? 'class="active"':'' ?>>
                    <a data-toggle="menu_tooltip" data-placement="right" title="My Account" href="<?=site_url("backend/myaccount")?>">
                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0C4.579 0 0 4.579 0 10c0 3.189 1.592 6.078 4 7.924V18h.102C5.77 19.245 7.813 20 10 20s4.23-.755 5.898-2H16v-.076c2.408-1.846 4-4.734 4-7.924 0-5.421-4.579-10-10-10zM6.074 16.927A3.002 3.002 0 019 14.573h2a3.003 3.003 0 012.926 2.354A7.82 7.82 0 0110 18a7.82 7.82 0 01-3.926-1.073zm9.536-1.286A5.007 5.007 0 0011 12.573H9a5.007 5.007 0 00-4.61 3.068C2.923 14.182 2 12.176 2 10c0-4.337 3.663-8 8-8s8 3.663 8 8c0 2.176-.923 4.182-2.39 5.641z" fill="#89959F"/>
                                <path d="M10 4C7.72 4 6 5.72 6 8c0 2.28 1.72 4 4 4 2.28 0 4-1.72 4-4 0-2.28-1.72-4-4-4zm0 6c-1.178 0-2-.822-2-2s.822-2 2-2 2 .822 2 2-.822 2-2 2z" fill="#89959F"/>
                            </svg>
                            <span> My Account</span>
                    </a>
                </li> 

                <li <?php echo ($nav == 'clientOffices')? 'class="active"':'' ?>>
                    <a data-toggle="menu_tooltip" data-placement="right" title="ClientOffices" href="<?=site_url("backend/clientoffices")?>">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.889 4.444h6.667v2.223H8.889V4.444zm0 4.445h6.667v2.222H8.889V8.89zm0 4.444h6.667v2.223H8.889v-2.223zM4.444 4.444h2.223v2.223H4.444V4.444zm0 4.445h2.223v2.222H4.444V8.89zm0 4.444h2.223v2.223H4.444v-2.223zM19 0H1C.444 0 0 .444 0 1v18c0 .444.444 1 1 1h18c.444 0 1-.556 1-1V1c0-.556-.556-1-1-1zm-1.222 17.778H2.222V2.222h15.556v15.556z" fill="#89959F"/></svg>
                        <span> Client Offices</span>
                    </a>
                </li> 
                
                <li <?php echo ($nav == 'services')? 'class="active"':'' ?>>
                    <a data-toggle="menu_tooltip" data-placement="right" title="Services" href="<?=site_url("backend/services")?>">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.889 4.444h6.667v2.223H8.889V4.444zm0 4.445h6.667v2.222H8.889V8.89zm0 4.444h6.667v2.223H8.889v-2.223zM4.444 4.444h2.223v2.223H4.444V4.444zm0 4.445h2.223v2.222H4.444V8.89zm0 4.444h2.223v2.223H4.444v-2.223zM19 0H1C.444 0 0 .444 0 1v18c0 .444.444 1 1 1h18c.444 0 1-.556 1-1V1c0-.556-.556-1-1-1zm-1.222 17.778H2.222V2.222h15.556v15.556z" fill="#89959F"/></svg>
                        <span> Services</span>
                    </a>
                </li> 
                <?php if($session->get('role_slug') == "superadmin"):?>   
                     <!-- <li <?php echo ($nav == 'settings')? 'class="active"':'' ?>><a href="<?=site_url("backend/settings")?>"><svg width="23" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.4 15l-1.7-1.4a9.6 9.6 0 000-3.1L22.4 9a.9.9 0 00.3-1c-.5-1.4-1.3-2.7-2.2-3.8a.9.9 0 00-1-.3l-2.2.8a9.4 9.4 0 00-2.6-1.5L14.3.9a.9.9 0 00-.7-.7h-.1C12-.1 10.6-.1 9.2.2a.9.9 0 00-.7.7L8 3.2c-1 .3-1.8.9-2.6 1.5L3.2 4a.9.9 0 00-1 .3A12 12 0 00.1 8V8c-.2.3 0 .7.2 1l1.8 1.5a9.4 9.4 0 000 3L.3 15a.9.9 0 00-.2 1 12 12 0 002.1 3.8.9.9 0 001 .3l2.2-.8c.8.6 1.7 1.2 2.6 1.5l.5 2.3a.9.9 0 00.7.7c1.4.3 2.9.3 4.3 0a.9.9 0 00.8-.7l.4-2.3c1-.3 1.8-.9 2.6-1.5l2.2.8a.9.9 0 001-.3 12 12 0 002.1-3.7V16c.2-.3 0-.7-.2-1zm-3.6-4.2a7.6 7.6 0 010 2.4l-.2 1.1 2 1.7a10 10 0 01-1.2 2l-2.4-.9-.9.7c-.6.5-1.3 1-2.1 1.2l-1 .4-.5 2.6h-2.3l-.5-2.6-1-.4c-.7-.3-1.4-.7-2-1.2l-1-.7-2.4.9c-.5-.6-.9-1.3-1.2-2l2-1.7-.1-1a7.7 7.7 0 010-2.5l.2-1-2-1.8c.2-.7.6-1.4 1-2l2.6.9.8-.7c.7-.5 1.4-1 2.1-1.2l1-.4.5-2.6h2.3l.5 2.6 1 .4c.8.3 1.5.7 2.1 1.2l.9.7 2.5-.9c.4.6.8 1.3 1 2l-2 1.7.3 1zM11.4 7a4.7 4.7 0 100 9.5 4.7 4.7 0 000-9.5zm2 6.9a3 3 0 01-5-2.2 3 3 0 013-3 3 3 0 013 3 3 3 0 01-1 2.2z" fill="#89959F"/></svg> <span>Settings</span></a></li> -->
                     <li <?php echo ($nav == 'masteruser')? 'class="active"':'' ?>><a data-toggle="menu_tooltip" data-placement="right" title="Master User" href="<?=site_url("masteruser")?>"><svg width="23" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.4 15l-1.7-1.4a9.6 9.6 0 000-3.1L22.4 9a.9.9 0 00.3-1c-.5-1.4-1.3-2.7-2.2-3.8a.9.9 0 00-1-.3l-2.2.8a9.4 9.4 0 00-2.6-1.5L14.3.9a.9.9 0 00-.7-.7h-.1C12-.1 10.6-.1 9.2.2a.9.9 0 00-.7.7L8 3.2c-1 .3-1.8.9-2.6 1.5L3.2 4a.9.9 0 00-1 .3A12 12 0 00.1 8V8c-.2.3 0 .7.2 1l1.8 1.5a9.4 9.4 0 000 3L.3 15a.9.9 0 00-.2 1 12 12 0 002.1 3.8.9.9 0 001 .3l2.2-.8c.8.6 1.7 1.2 2.6 1.5l.5 2.3a.9.9 0 00.7.7c1.4.3 2.9.3 4.3 0a.9.9 0 00.8-.7l.4-2.3c1-.3 1.8-.9 2.6-1.5l2.2.8a.9.9 0 001-.3 12 12 0 002.1-3.7V16c.2-.3 0-.7-.2-1zm-3.6-4.2a7.6 7.6 0 010 2.4l-.2 1.1 2 1.7a10 10 0 01-1.2 2l-2.4-.9-.9.7c-.6.5-1.3 1-2.1 1.2l-1 .4-.5 2.6h-2.3l-.5-2.6-1-.4c-.7-.3-1.4-.7-2-1.2l-1-.7-2.4.9c-.5-.6-.9-1.3-1.2-2l2-1.7-.1-1a7.7 7.7 0 010-2.5l.2-1-2-1.8c.2-.7.6-1.4 1-2l2.6.9.8-.7c.7-.5 1.4-1 2.1-1.2l1-.4.5-2.6h2.3l.5 2.6 1 .4c.8.3 1.5.7 2.1 1.2l.9.7 2.5-.9c.4.6.8 1.3 1 2l-2 1.7.3 1zM11.4 7a4.7 4.7 0 100 9.5 4.7 4.7 0 000-9.5zm2 6.9a3 3 0 01-5-2.2 3 3 0 013-3 3 3 0 013 3 3 3 0 01-1 2.2z" fill="#89959F"/></svg> <span>Master User</span></a></li>

                <?php endif;?>
            </ul>
        <?php 
            ?>
            <h3 class="separator"><span>Account</span></h3>
            <ul>
                <li <?php echo ($nav == 'my-account')? 'class="active"':'' ?>>
                    <a href="<?=site_url("backend/myaccount")?>">
                            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0C4.579 0 0 4.579 0 10c0 3.189 1.592 6.078 4 7.924V18h.102C5.77 19.245 7.813 20 10 20s4.23-.755 5.898-2H16v-.076c2.408-1.846 4-4.734 4-7.924 0-5.421-4.579-10-10-10zM6.074 16.927A3.002 3.002 0 019 14.573h2a3.003 3.003 0 012.926 2.354A7.82 7.82 0 0110 18a7.82 7.82 0 01-3.926-1.073zm9.536-1.286A5.007 5.007 0 0011 12.573H9a5.007 5.007 0 00-4.61 3.068C2.923 14.182 2 12.176 2 10c0-4.337 3.663-8 8-8s8 3.663 8 8c0 2.176-.923 4.182-2.39 5.641z" fill="#89959F"/>
                                <path d="M10 4C7.72 4 6 5.72 6 8c0 2.28 1.72 4 4 4 2.28 0 4-1.72 4-4 0-2.28-1.72-4-4-4zm0 6c-1.178 0-2-.822-2-2s.822-2 2-2 2 .822 2 2-.822 2-2 2z" fill="#89959F"/>
                            </svg>
                            <span> My Account</span>
                    </a>
                </li> 
            </ul>
            <?php
        endif;?>
    </aside>

    <main class="main">