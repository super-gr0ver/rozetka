<?php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(
	"main",
	array(
		"CSiteTemplate" => "classes/general/site_template.php",
		"CBitrixComponent" => "classes/general/component.php",
		"CComponentEngine" => "classes/general/component_engine.php",
		"CComponentAjax" => "classes/general/component_ajax.php",
		"CBitrixComponentTemplate" => "classes/general/component_template.php",
		"CComponentUtil" => "classes/general/component_util.php",
		"CControllerClient" => "classes/general/controller_member.php",
		"PHPParser" => "classes/general/php_parser.php",
		"CDiskQuota" => "classes/general/quota.php",
		"CEventLog" => "classes/general/event_log.php",
		"CEventMain" => "classes/general/event_log.php",
		"CAdminFileDialog" => "classes/general/file_dialog.php",
		"WLL_User" => "classes/general/liveid.php",
		"WLL_ConsentToken" => "classes/general/liveid.php",
		"WindowsLiveLogin" => "classes/general/liveid.php",
		"CFile" => "classes/general/file.php",
		"CAllFile" => "classes/general/file.php",
		"CTempFile" => "classes/general/file_temp.php",
		"CFavorites" => "classes/mysql/favorites.php",
		"CUserOptions" => "classes/general/user_options.php",
		"CGridOptions" => "classes/general/grids.php",
		"CUndo" => "/classes/general/undo.php",
		"CAutoSave" => "/classes/general/undo.php",
		"CRatings" => "classes/mysql/ratings.php",
		"CRatingsComponentsMain" => "classes/mysql/ratings_components.php",
		"CRatingRule" => "classes/general/rating_rule.php",
		"CRatingRulesMain" => "classes/mysql/rating_rules.php",
		"CTopPanel" => "public/top_panel.php",
		"CEditArea" => "public/edit_area.php",
		"CComponentPanel" => "public/edit_area.php",
		"CTextParser" => "classes/general/textparser.php",
		"CPHPCacheFiles" => "classes/general/cache_files.php",
		"CDataXMLNode" => "classes/general/xml.php",
		"CDataXMLDocument" => "classes/general/xml.php",
		"CDataXML" => "classes/general/xml.php",
		"CXMLFileStream" => "classes/general/xml.php",
		"CRsaProvider" => "classes/general/rsasecurity.php",
		"CRsaSecurity" => "classes/general/rsasecurity.php",
		"CRsaBcmathProvider" => "classes/general/rsabcmath.php",
		"CRsaOpensslProvider" => "classes/general/rsaopenssl.php",
		"CASNReader" => "classes/general/asn.php",
		"CBXShortUri" => "classes/mysql/short_uri.php",
		"CFinder" => "classes/general/finder.php",
		"CAccess" => "classes/general/access.php",
		"CAuthProvider" => "classes/general/authproviders.php",
		"IProviderInterface" => "classes/general/authproviders.php",
		"CGroupAuthProvider" => "classes/general/authproviders.php",
		"CUserAuthProvider" => "classes/general/authproviders.php",
		"CTableSchema" => "classes/general/table_schema.php",
		"CCSVData" => "classes/general/csv_data.php",
		"CSmile" => "classes/general/smile.php",
		"CSmileGallery" => "classes/general/smile.php",
		"CSmileSet" => "classes/general/smile.php",
		"CGlobalCounter" => "classes/general/global_counter.php",
		"CUserCounter" => "classes/mysql/user_counter.php",
		"CUserCounterPage" => "classes/mysql/user_counter.php",
		"CHotKeys" => "classes/general/hot_keys.php",
		"CHotKeysCode" => "classes/general/hot_keys.php",
		"CBXSanitizer" => "classes/general/sanitizer.php",
		"IBXArchive" => "classes/general/archive.php",
		"CBXArchive" => "classes/general/archive.php",
		"CAdminNotify" => "classes/general/admin_notify.php",
		"CBXFavAdmMenu" => "classes/general/favorites.php",
		"CAdminInformer" => "classes/general/admin_informer.php",
		"CSiteCheckerTest" => "classes/general/site_checker.php",
		"CSqlUtil" => "classes/general/sql_util.php",
		"CFileUploader" => "classes/general/uploader.php",
		"LPA" => "classes/general/lpa.php",
		"CAdminFilter" => "interface/admin_filter.php",
		"CAdminList" => "interface/admin_list.php",
		"CAdminListRow" => "interface/admin_list.php",
		"CAdminUiList" => "interface/admin_ui_list.php",
		"CAdminUiListRow" => "interface/admin_ui_list.php",
		"CAdminUiResult" => "interface/admin_ui_list.php",
		"CAdminUiContextMenu" => "interface/admin_ui_list.php",
		"CAdminUiSorting" => "interface/admin_ui_list.php",
		"CAdminUiListActionPanel" => "interface/admin_ui_list.php",
		"CAdminTabControl" => "interface/admin_tabcontrol.php",
		"CAdminForm" => "interface/admin_form.php",
		"CAdminFormSettings" => "interface/admin_form.php",
		"CAdminTabControlDrag" => "interface/admin_tabcontrol_drag.php",
		"CAdminDraggableBlockEngine" => "interface/admin_tabcontrol_drag.php",
		"CJSPopup" => "interface/jspopup.php",
		"CJSPopupOnPage" => "interface/jspopup.php",
		"CAdminCalendar" => "interface/admin_calendar.php",
		"CAdminViewTabControl" => "interface/admin_viewtabcontrol.php",
		"CAdminTabEngine" => "interface/admin_tabengine.php",
		"CCaptcha" => "classes/general/captcha.php",
		"CMpNotifications" => "classes/general/mp_notifications.php",
		"CAllTask" => "classes/general/task.php",
		"CTask" => "classes/general/task.php",
		"CAllOperation" => "classes/general/operation.php",
		"COperation" => "classes/general/operation.php",
		"CAllGroup" => "classes/general/group.php",
		"CGroup" => "classes/general/group.php",
		"CAjax" => "ajax_tools.php",
		"CAllUser" => "classes/general/user.php",
		"CUser" => "classes/general/user.php",
		"CAllEvent" => "classes/general/event.php",
		"CEvent" => "classes/general/event.php",
		"CAllEventMessage" => "classes/general/eventmessage.php",
		"CEventMessage" => "classes/general/eventmessage.php",
		"CEventType" => "classes/general/eventmessage.php",
		"_CEventTypeResult" => "classes/general/eventmessage.php",
		"CDBResultEventMultiResult" => "classes/general/eventmessage.php",
		"CDebugInfo" => "classes/general/debuginfo.php",
		"CCaptchaAgent" => "classes/general/captchaagent.php",
		"CAllFilterQuery" => "classes/general/filterquery.php",
		"CFilterQuery" => "classes/general/filterquery.php",
		"CConvertorsPregReplaceHelper" => "classes/general/convertorspregreplacehelper.php",
		"CSpacer" => "classes/general/spacer.php",
		"UpdateTools" => "classes/general/updatetools.php",
		"CJSCore" => "classes/general/jscore.php",
		"CCheckListTools" => "classes/general/checklist.php",
		"CMenu" => "classes/general/menu.php",
		"CMenuCustom" => "classes/general/menucustom.php",
		"CAllUserTypeEntity" => "classes/general/usertype.php",
		"CUserTypeEntity" => "classes/general/usertype.php",
		"CUserFieldEnum" => "classes/general/userfieldenum.php",
		"CUserTypeSQL" => "classes/general/usertypesql.php",
		"CUserTypeManager" => "classes/general/usertypemanager.php",
		"CUserTypeString" => "classes/general/usertypestr.php",
		"CUserTypeInteger" => "classes/general/usertypeint.php",
		"CUserTypeDouble" => "classes/general/usertypedbl.php",
		"CUserTypeDateTime" => "classes/general/usertypetime.php",
		"CUserTypeDate" => "classes/general/usertypedate.php",
		"CUserTypeBoolean" => "classes/general/usertypebool.php",
		"CUserTypeFile" => "classes/general/usertypefile.php",
		"CUserTypeEnum" => "classes/general/usertypeenum.php",
		"CUserTypeIBlockSection" => "classes/general/usertypesection.php",
		"CIBlockSectionEnum" => "classes/general/usertypesection.php",
		"CUserTypeIBlockElement" => "classes/general/usertypeelement.php",
		"CUserTypeStringFormatted" => "classes/general/usertypestrfmt.php",
		"CUserTypeUrl" => "classes/general/usertypeurl.php",
		"BXGadget" => "classes/general/gadget.php",
		"CMainAdmin" => "classes/general/main_admin.php",
		"CTemplates" => "classes/general/templates.php",
		"CPageTemplate" => "classes/general/page_template.php",
		"FilesCmp" => "classes/general/files_cmp.php",
		"CArchiver" => "classes/general/tar_gz.php",
		"CZip" => "classes/general/zip.php",

		//deprecated
		"CUrlRewriter" => "classes/general/urlrewriter.php",
		"CharsetConverter" => "classes/general/charset_converter.php",
		"CHTMLPagesCache" => "lib/composite/helper.php",
		"StaticHtmlMemcachedResponse" => "lib/composite/responder.php",
		"StaticHtmlFileResponse" => "lib/composite/responder.php",
		"Bitrix\\Main\\Page\\Frame" => "lib/composite/engine.php",
		"Bitrix\\Main\\Page\\FrameStatic" => "lib/composite/staticarea.php",
		"Bitrix\\Main\\Page\\FrameBuffered" => "lib/composite/bufferarea.php",
		"Bitrix\\Main\\Page\\FrameHelper" => "lib/composite/bufferarea.php",
		"Bitrix\\Main\\Data\\StaticHtmlCache" => "lib/composite/page.php",
		"Bitrix\\Main\\Data\\StaticHtmlStorage" => "lib/composite/data/abstractstorage.php",
		"Bitrix\\Main\\Data\\StaticHtmlFileStorage" => "lib/composite/data/filestorage.php",
		"Bitrix\\Main\\Data\\StaticHtmlMemcachedStorage" => "lib/composite/data/memcachedstorage.php",
		"Bitrix\\Main\\Data\\StaticCacheProvider" => "lib/composite/data/cacheprovider.php",
		"Bitrix\\Main\\Data\\AppCacheManifest" => "lib/composite/appcache.php",
	)
);
