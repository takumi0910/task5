<?php

/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * mysqli 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** mysqli 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_8987058d38734f5');

/** mysqli データベースのユーザー名 */
define('DB_USER', 'b2f3ca2c9dd146');

/** mysqli データベースのパスワード */
define('DB_PASSWORD', 'a0d33c19');

/** mysqli のホスト名 */
define('DB_HOST', 'us-cdbr-east-02.cleardb.com');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-ByWlioE7wQ4{+WV=baS$ie`sbm9VSRU6%rl7><_s[hw|BLAvof.-Q`&TW)(GSh(');
define('SECURE_AUTH_KEY',  ')l=z+CV-hBM{q%Gnyl9IBfK@ne=^AF0 [KW<g@T|[d|5?lQaE%<T.4t!+C.uu7-P');
define('LOGGED_IN_KEY',    'ir!gh>BX|I(+fw5D{k@BUl1-?l%i[^}3a_nfB|<g|P||11m|&,`N5VSwYyy{Exo(');
define('NONCE_KEY',        'Zy.=e,;kY:GlDh5}rWxE~K^S*qHFdHFL5_Vt`7E: _e0p0BI5Pplq_?z`|qWf(.a');
define('AUTH_SALT',        '{vnN dQwY9l5DZXN;@*W@3TXn66<x-3du-w]:cz?)i%g6U~$d`L!9Kd^YR [`)b)');
define('SECURE_AUTH_SALT', 'Y|s4i3Bb2jqWe-T-G$}r5=ya_7-G=E+A]?qSR^bRTddKWyc>h~Tq?eI8m.3Y1a=)');
define('LOGGED_IN_SALT',   'WW0=-5CK3,wiSzDUY&(!2Tk?z LB# |<S2no%{^_u`0S$d Ww8tNVf~Zl1?6ez=:');
define('NONCE_SALT',       '>XRN5.s!.qJ|THlF_j<T+;)UoX5y@|1z3WWTvg6ZQ+OZ1{So^YiKr%}I3Qdrrgfc');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
