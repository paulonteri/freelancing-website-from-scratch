<?php
session_start();
require '../includes/db.php';
require '../partials/head.php';
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    require '../partials/navbar.php';
    ?>

    <!-------------------------------- intro -------------------------------------------------------->
    <div class="container">
        <h1 style="text-align:center; margin-top:25px;">Freelancer Name</h1>
    </div>
    <!-------------------------------- end intro -------------------------------------------------------->

    <!-------------------------------- freelancer -------------------------------------------------------->
    <div class="container" style="padding-bottom:5px; padding-top:10px; margin-bottom:10px">

        <!-- <h3 style=" margin:auto 0px; text-align:center" class="">Name </h3> -->

        <hr style="margin: 1rem 0;" />
        <!-------------------------------- bio & skills -------------------------------------------------------->
        <div class="row">
            <div class="column freelancer-list-image ">
                <img src="https://via.placeholder.com/150" class="center-on-small-screen container" />
            </div>
            <div class="column freelancer-list-text">
                <h2 style="text-align:left; margin:auto 0px;">
                    Bio
                </h2>
                <p style="text-align:left; margin:auto 0px;">Laboris nulla ea nostrud officia dolore. Commodo
                    fugiat
                    ipsum incididunt eiusmod adipisicing sunt qui. Ad elit reprehenderit non magna. Lorem ut culpa
                    adipisicing dolor ex ipsum amet exercitation deserunt consectetur eu laborum occaecat. Nisi
                    Lorem
                    culpa velit labore voluptate id ad duis dolor cillum. Do enim nisi est et mollit labore officia
                    culpa qui officia sit. Occaecat tempor aliquip qui elit dolor ad duis quis occaecat labore
                    eiusmod
                    dolor sunt.
                </p>
                <hr style="margin: 1rem 0;" />
                <h2 style="text-align:left; margin:auto 0px;">
                    Skills
                </h2>
                <p style="text-align:left; margin:auto 0px;">
                    #web-development #graphic-design #python
                </p>
            </div>
        </div>
        <!-------------------------------- end bio & skills -------------------------------------------------------->
        <hr />
        <!-------------------------------- location, date joined & rating -------------------------------------------------------->
        <div class="row" style="justify-content:space-between;">
            <div class="column" style="margin-bottom:5px;">
                <p class="center-text-on-small-screen" style="text-align:left; margin:auto 0px;">
                    <b>Location:</b> Nairobi, Kenya
                </p>
            </div>
            <div class="column" style="margin-bottom:5px;">
                <p style="text-align:center; margin:auto 0px;"><b>Joined:</b> 4 years, 11 months ago</p>
            </div>
            <div class="column " style="margin-bottom:5px;">
                <p class="center-text-on-small-screen float-right-on-large-screen">
                    <b>Overall rating:</b>
                    5.0
                    <img src="/static/icons/rating/rating-5-stars.png"
                        style="width:100px; height:15px; margin:auto 0px;" />
                </p>
            </div>
        </div>
        <!-------------------------------- end location, date joined & rating -------------------------------------------------------->
        <hr />
        <!-------------------------------- reviews -------------------------------------------------------->
        <h2 style="text-align:left;">
            Reviews
        </h2>
        <?php for ($x = 0; $x <= 5; $x++) { ?>
        <!-------------------------------- single review -------------------------------------------------------->
        <div class="rounded-corners" style="margin-bottom:10px">
            <div class="row " style="justify-content:space-between;">
                <div class="column">
                    <p style=" margin:auto 0px;" class="center-text-on-small-screen">User <?php echo $x; ?></p>
                </div>
                <div class="column ">
                    <p class="center-self-on-screen float-right-on-large-screen">4.0
                        <img src="/static/icons/rating/rating-4-stars.png"
                            style="width:100px; height:15px; margin:auto 0px;" />
                    </p>
                </div>

            </div>
            <p>
                Quis elit occaecat fugiat laborum minim reprehenderit consequat nisi ipsum qui aliquip magna non dolor.
                Ex consequat et sit nostrud amet deserunt mollit adipisicing deserunt esse. Eiusmod non ex veniam est
                pariatur cupidatat dolor exercitation proident labore fugiat deserunt. Irure magna excepteur officia
                irure eiusmod est aliqua enim non nisi elit et excepteur id.
            </p>
        </div>
        <!-------------------------------- end single review -------------------------------------------------------->
        <?php } ?>
        <!-------------------------------- end reviews -------------------------------------------------------->
    </div>



</body>

<?php
require '../partials/footer.php';
?>

</html>