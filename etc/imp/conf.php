<?php
/* CONFIG START. DO NOT CHANGE ANYTHING IN OR AFTER THIS LINE. */
// $Horde: imp/config/conf.xml,v 1.53.2.33 2008/05/06 17:54:04 slusarz Exp $
$conf['spell']['driver'] = '';
$conf['utils']['gnupg'] = '/usr/bin/gpg';
$conf['utils']['gnupg_keyserver'] = array();
$conf['utils']['gnupg_timeout'] = 10;
$conf['utils']['openssl_cafile'] = '/etc/ssl/certs';
$conf['utils']['openssl_binary'] = '/usr/bin/openssl';
$conf['menu']['apps'] = array();
$conf['user']['select_sentmail_folder'] = true;
$conf['user']['allow_resume_all_in_drafts'] = false;
$conf['user']['allow_folders'] = true;
$conf['user']['allow_resume_all'] = false;
$conf['user']['allow_view_source'] = true;
$conf['user']['alternate_login'] = false;
$conf['user']['redirect_on_logout'] = false;
$conf['user']['select_view'] = true;
$conf['server']['change_server'] = false;
$conf['server']['change_port'] = false;
$conf['server']['change_protocol'] = false;
$conf['server']['change_smtphost'] = false;
$conf['server']['change_smtpport'] = false;
$conf['server']['server_list'] = 'none';
$conf['server']['fixed_folders'] = array();
$conf['server']['sort_limit'] = 0;
$conf['server']['cache_folders'] = false;
$conf['server']['token_lifetime'] = 1800;
$conf['server']['cachejs'] = 'none';
$conf['server']['cachecss'] = 'none';
$conf['mailbox']['show_preview'] = false;
$conf['fetchmail']['show_account_colors'] = false;
$conf['fetchmail']['size_limit'] = 4000000;
$conf['msgcache']['use_msgcache'] = false;
$conf['mlistcache']['use_mlistcache'] = false;
$conf['msgsettings']['filtering']['words'] = './config/filter.txt';
$conf['msgsettings']['filtering']['replacement'] = '****';
$conf['spam']['reporting'] = false;
$conf['notspam']['reporting'] = false;
$conf['print']['add_printedby'] = false;
$conf['msg']['prepend_header'] = true;
$conf['msg']['append_trailer'] = true;
$conf['compose']['ac_threshold'] = 3;
$conf['compose']['allow_receipts'] = true;
$conf['compose']['special_characters'] = true;
$conf['compose']['use_vfs'] = false;
$conf['compose']['htmlsig_img_size'] = 30000;
$conf['compose']['link_all_attachments'] = false;
$conf['compose']['link_attachments_notify'] = true;
$conf['compose']['link_attachments'] = true;
$conf['compose']['link_attach_size_hard'] = 0;
$conf['compose']['link_attach_size_limit'] = 0;
$conf['compose']['link_attach_threshold'] = 5242880;
$conf['compose']['attach_size_limit'] = 0;
$conf['compose']['attach_count_limit'] = 0;
$conf['compose']['reply_limit'] = 200000;
$conf['contactsimage']['backends'] = array('IMP_Contacts_Avatar_Addressbook');
$conf['hooks']['vinfo'] = false;
$conf['hooks']['postlogin'] = false;
$conf['hooks']['postsent'] = false;
$conf['hooks']['signature'] = false;
$conf['hooks']['trailer'] = false;
$conf['hooks']['fetchmail_filter'] = false;
$conf['hooks']['mbox_redirect'] = false;
$conf['hooks']['mbox_icon'] = false;
$conf['hooks']['spam_bounce'] = false;
$conf['hooks']['msglist_format'] = false;
$conf['maillog']['use_maillog'] = true;
$conf['sentmail']['driver'] = 'Null';
$conf['tasklist']['use_tasklist'] = true;
$conf['notepad']['use_notepad'] = true;
$conf['maillog']['driver'] = 'history';
$conf['pgp']['keylength'] = 0;
/* CONFIG END. DO NOT CHANGE ANYTHING IN OR BEFORE THIS LINE. */
