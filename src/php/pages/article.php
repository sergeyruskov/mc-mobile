<?
//Подключаем вспомогательные функции/параметры
require_once(
	$_SERVER["DOCUMENT_ROOT"] . "/" .
	explode('/', substr($_SERVER["PHP_SELF"], 1))[0] . "/php/lib/index.php");

//Константы для этой страницы
define("PATH__ARTICLE", PATH__LEGO . "article/");

//header
require_once(PATH__LEGO_COMMON . "header.php");

?>


<main class="article__main">

	<div class="article__wrapper-breadcrumb">
		<?require_once(PATH__LEGO_COMMON . "breadcrumb.php");
		?>
	</div>

	<?
	require_once(PATH__ARTICLE . "article-news.php");
	require_once(PATH__ARTICLE . "horizontal-announcement.php");
	?>


	<a href="#" class="article__wrapper-advertisement center-block w300">
		<img src="<?= PATH__IMG ?>common/advertisement.jpg" alt="">
	</a>



	<?
	require(PATH__ARTICLE . "vertical-announcement.php");
	require(PATH__ARTICLE . "vertical-announcement.php");
	?>



	<a href="#" class="article__wrapper-advertisement center-block w300">
		<img src="<?= PATH__IMG ?>common/advertisement.jpg" alt="">
	</a>

	<?
	require(PATH__ARTICLE . "vertical-announcement.php");
	require(PATH__ARTICLE . "vertical-announcement.php");
	?>


	<div class="article__wrapper-form-search">
		<?require_once(PATH__LEGO_COMMON . "form-search.php"); ?>
	</div>

	<?require_once(PATH__LEGO_COMMON . "announcement-list.php"); ?>


	<div class="article__wrapper-mc-slogan">
		<?require_once(PATH__LEGO_COMMON . "mc-slogan.php"); ?>
	</div>

	<div class="article__wrapper-offer-list">
		<?require_once(PATH__LEGO_COMMON . "offer-list.php"); ?>
	</div>

	<?require_once(PATH__LEGO_COMMON . "form-delivery.php"); ?>

</main>

<?
require_once(PATH__LEGO_COMMON . "footer.php");
require_once(PATH__LEGO_COMMON . "footer-system.php");
?>


