<?php
/* データベース定義 */
define('DB_HOST','localhost');
define('DB_NAME','lesson2');
define('DB_CHAR','utf8mb4');
define('DSN','mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR.'');
define('DB_USER','root');
define('DB_PASS','');
/* PHPのエラーを表示するように設定 */
error_reporting(E_ALL & ~E_NOTICE);

/*１）パスワード文字数制限を4文字以上から5文字以上に変更する（5文字未満はエラー） 
修正ファイル：ヒント無し 
修正箇所：ヒント無し */
define('PWD_LENGTH',5);   // パスワード長
define('PAGING',5);      // ページネーション単位



