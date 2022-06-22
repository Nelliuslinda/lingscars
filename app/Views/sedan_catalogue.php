<?php 

    $this->extend('/templates/catalogue_template');

    $this->section('content');

    
 
?>

    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <p>Sedans at a family friendly price</p>
            </div>
        </div>
    </section>    

    <section class="frames">
        <div class="row">
            <div class="frame-one">
                <h2><b>Description</b></h2>
                <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available.<br>Reliable engine and amazing wheels that are sure to stand the test of time</p>
                <img src="images/frame16.png" alt="car">
            </div>
            <div class="frame-two">
                <h1><b>Sedan Highlights</b></h1>
            </div>
            <table class="table table-hover">

                <?php foreach ($images as $row): ?>

                <tbody>
                <tr>
                
                <?php if($row['category_id'] == 1): ?>
                <td class="td-car"><img src="<?php echo $row['image']; ?>" alt="" srcset=""></td>
                <td class="td-words">
                    <h2 class="vehicle_name"><b><?php echo $row['vehicle_model']; ?></b></h2>
                    <p><?php echo $row['vehicle_description']; ?></p>
                    <b>€<?php echo $row['unit_price']; ?></b>
                    <input type="button" value="add to cart" class="btn btn-dark">
                </td>
                <?php endif ?>

                </tr>
                </tbody>

                <?php endforeach; ?> 
            </table>
        </div>
    </section>
    
    
<?php $this->endSection();?>
