
<!-- 

Recipe Display system
Display list of items 

 -->

<?php 
include 'header.php';
include 'classes.php';
?>


<div class="main-container">
	<div class="row">
		<?php
		if (isset($_GET['search'])){
			echo $recipes->search($_GET['search']);
		}else{
			/*Creating a for loop to get all recipes*/
			foreach ($recipe_list as $recipe) {
				echo $recipe->getter();
			}		
		}
		?>

	</div> <!-- Closing the row -->
</div> <!-- Closing the main container -->

<?php include 'footer.php';?>