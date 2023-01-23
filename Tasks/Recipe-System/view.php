
<!-- 

Recipe Display system
Display list of items 

 -->

<?php 
include 'header.php';
include 'classes.php';

if (isset($_GET['title']) && !(empty(trim($_GET['title'])))){
	$slug=$_GET['title'];
	foreach ($recipe_list as $recipe) {
		$result = stripos($recipe->title, $slug) !== false; /*Searching for a recipe whose title matches the slug*/
		if ($result){ /*Fetching the details of the recipe found*/
			$image=$recipe->image;
			$title=$recipe->title;
			$description=$recipe->description;
			$ingredients=$recipe->ingredients;
			$cookingEquipment=$recipe->cookingEquipment;
		}
	} 
}


function stringTolist($str){
	$arr = explode(",", $str);
	$final="";
	foreach ($arr as $value) {
		$final.='<li class="item-value">'.$value."</li>";
	}
	return $final;
}


?>

<style type="text/css">
	

</style>

<div class="main-container">
	<div class="view-item-row">
		<div class="one">
			<div class="view-image-holder">
				<?php echo '<img class="view-image" src="'.$image.'" alt="Image should be here">';?>
			</div>
			<div class="view-image-title">
				<h1><?php echo $slug;?></h1>
			</div>
		</div><!-- CLosing one -->

		<div class="details description">
			<h1>Description</h1>
			<p>
				<?php echo $description;?>
			</p>
		</div>
		<div class="details ingredients">
			<h1>Ingredients</h1>
			<p>
				<?php echo stringTolist($ingredients);?>
			</p>
		</div>
		<div class="details equipment">
			<h1>Equipment</h1>
			<p>
				<?php echo stringTolist($cookingEquipment);?>
			</p>
		</div>


	</div> <!-- Closing the row -->
</div> <!-- Closing the main container -->




<?php include 'footer.php';