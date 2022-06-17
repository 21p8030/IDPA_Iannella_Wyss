<?php
/* Smarty version 4.1.0, created on 2022-06-17 14:29:59
  from 'C:\Users\Julien Wyss\Documents\IDPA\IDPA_Iannella_Wyss\app\views\styles.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ac73c7199440_52546418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7835c36ff5e6433ce5eea45833d569d46e8006' => 
    array (
      0 => 'C:\\Users\\Julien Wyss\\Documents\\IDPA\\IDPA_Iannella_Wyss\\app\\views\\styles.smarty',
      1 => 1655468613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac73c7199440_52546418 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
#header {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 9997;
  transition: all 0.5s;
  padding: 15px;
  overflow-y: auto;
}
@media (max-width: 992px) {
  #header {
    width: 300px;
    background: #fff;
    border-right: 1px solid #e6e9ec;
    left: -300px;
  }
}

@media (min-width: 992px) {
  #main {
    margin-left: 100px;
  }
}
    /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
#navbar{
  border-width: 0px;
}
.nav-menu {
    padding: 0;
    display: block;
  }
  .nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  .nav-menu > ul > li {
    position: relative;
    white-space: nowrap;
  }
  .nav-menu a, .nav-menu a:focus {
    display: flex;
    align-items: center;
    color: #45505b;
    padding: 10px 18px;
    margin-bottom: 8px;
    transition: 0.3s;
    font-size: 15px;
    border-radius: 50px;
    background: #f2f3f5;
    height: 56px;
    width: 100%;
    overflow: hidden;
    transition: 0.3s;
  }
  .nav-menu a i, .nav-menu a:focus i {
    font-size: 20px;
  }
  .nav-menu a span, .nav-menu a:focus span {
    padding: 0 5px 0 7px;
    color: #45505b;
  }
  @media (min-width: 992px) {
    .nav-menu a, .nav-menu a:focus {
      width: 56px;
    }
    .nav-menu a span, .nav-menu a:focus span {
      display: none;
      color: #fff;
    }
  }
  .nav-menu a:hover, .nav-menu .active, .nav-menu .active:focus, .nav-menu li:hover > a {
    color: #fff;
    background: #62c462;
  }
  .nav-menu a:hover span, .nav-menu .active span, .nav-menu .active:focus span, .nav-menu li:hover > a span {
    color: #fff;
  }
  .nav-menu a:hover, .nav-menu li:hover > a {
    width: 100%;
    color: #fff;
  }
  .nav-menu a:hover span, .nav-menu li:hover > a span {
    display: block;
  }
  
  /**
  * Mobile Navigation 
  */
  .mobile-nav-toggle {
    position: fixed;
    right: 10px;
    top: 10px;
    z-index: 9998;
    border: 0;
    background: none;
    font-size: 28px;
    transition: all 0.4s;
    outline: none !important;
    line-height: 0;
    cursor: pointer;
    border-radius: 50px;
    padding: 5px;
  }
  .mobile-nav-toggle i {
    color: #45505b;
  }
  
  .mobile-nav-active {
    overflow: hidden;
  }
  .mobile-nav-active #header {
    left: 0;
  }
  .mobile-nav-active .mobile-nav-toggle {
    color: #fff;
    background-color: #62c462;
  }
        body,
        html,
        table td,
        table th,
        input[type=text] {
        font-size: 11pt;
        font-family: verdana, arial, sans-serif;
        }
        input {
            padding: 6px;
          }
        h1, h2 {
          margin-top: 50px;
          margin-bottom: 50px;
          width: 100%;
          text-align: center;
        }

        input[type=text] {
        padding: 5px;
        width: 400px;
        }

        table {
        border-collapse: collapse;
        }

        table td,
        table th {
        padding: 5px;
        border: 1px solid lightgray;
        }

        table th {
        background-color: lightgray;
        }
        .wrapper {
          display: flex;
          width: 100%;
          justify-content: center;
        }
        .wrapper_nullstellen {
          display: flex;
          width: 60%;
          justify-content: center;
          margin: auto;
        }
        .flex_wrapper {
          display: flex;
          flex-direction: column;
          align-items: center;
          margin: auto;
        }
.is-hidden {
  display: none;
}

    </style><?php }
}
