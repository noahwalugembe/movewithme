<?php
/**
 * Created by PhpStorm.
 * User: Lincoln
 * Date: 11/8/2017
 * Time: 12:14 PM
 */

require_once '../includes/db-connect.php';
require_once '../includes/functions.php';
sec_session_start();
$page="Dashboard";
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<?php require_once '../components/header.php' ?>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
      class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<?php require_once '../components/navbar.php' ?>
<?php require_once '../components/menu.php' ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Statistics -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                                    <i class="icon-plane font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-cyan white media-body">
                                    <h5>AirwayBills</h5>
                                    <h5 class="text-bold-400"><?php echo countRows($mysqli,'bills')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                                    <i class="icon-user1 font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-deep-orange white media-body">
                                    <h5>New Users</h5>
                                    <h5 class="text-bold-400"><?php echo countRows($mysqli,'users')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                                    <i class="icon-ship font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-teal white media-body">
                                    <h5>Shipment</h5>
                                    <h5 class="text-bold-400"><?php echo countRows($mysqli,'shipment')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                                    <i class="icon-banknote font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-pink white media-body">
                                    <h5>Total Profit</h5>
                                    <h5 class="text-bold-400">5.6 M</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->
            <!--project Total Earning, visit & post-->
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="earning-chart position-relative">
                                <div class="chart-title position-absolute mt-2 ml-2">
                                    <h1 class="display-4">$9865</h1>
                                    <span class="text-muted">Total Earning</span>
                                    <?php echo $_SESSION['user_id'];?>
                                </div>
                                <canvas id="earning-chart" class="height-450 block"></canvas>
                                <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                                    <a href="#" class="btn bg-cyan mr-1 white">Statistics <i
                                                class="icon-stats-bars"></i></a> <span class="text-muted">for the <a
                                                href="#" class="primary darken-2">last year.</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <canvas id="posts-visits" class="height-400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/project Total Earning, visit & post-->
            <!-- projects table with monthly chart -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ongoing Projects</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <p class="m-0">Total ongoing projects 6 <span class="float-xs-right"><a href="#"
                                                                                                       target="_blank">Project Summary <i
                                                    class="icon-arrow-right2"></i></a></span></p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Owner</th>
                                        <th>Priority</th>
                                        <th>Progress</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate">ReactJS App</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-4.png"
                                                        alt="avatar"></span> <span>Sarah W.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-success">Low</span></td>
                                        <td class="valign-middle">
                                            <progress value="88" max="100"
                                                      class="progress progress-xs progress-success m-0">88%
                                            </progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Fitness App</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-5.png"
                                                        alt="avatar"></span> <span>Edward C.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
                                        <td class="valign-middle">
                                            <progress value="55" max="100"
                                                      class="progress progress-xs progress-warning m-0">55%
                                            </progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">SOU plugin</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-6.png"
                                                        alt="avatar"></span> <span>Carol E.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-danger">Critical</span></td>
                                        <td class="valign-middle">
                                            <progress value="25" max="100"
                                                      class="progress progress-xs progress-danger m-0">25%
                                            </progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Android App</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-7.png"
                                                        alt="avatar"></span> <span>Gregory L.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-success">Low</span></td>
                                        <td class="valign-middle">
                                            <progress value="95" max="100"
                                                      class="progress progress-xs progress-success m-0">95%
                                            </progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">ABC Inc. UI/UX</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-8.png"
                                                        alt="avatar"></span> <span>Susan S.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
                                        <td class="valign-middle">
                                            <progress value="45" max="100"
                                                      class="progress progress-xs progress-warning m-0">45%
                                            </progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Product UI</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-9.png"
                                                        alt="avatar"></span> <span>Walter K.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-danger">Critical</span></td>
                                        <td class="valign-middle">
                                            <progress value="15" max="100"
                                                      class="progress progress-xs progress-danger m-0">15%
                                            </progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Fitness App</td>
                                        <td class="text-truncate">
                                            <span class="avatar avatar-xs"><img
                                                        src="../app-assets/images/portrait/small/avatar-s-5.png"
                                                        alt="avatar"></span> <span>Edward C.</span>
                                        </td>
                                        <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
                                        <td class="valign-middle">
                                            <progress value="55" max="100"
                                                      class="progress progress-xs progress-warning m-0">55%
                                            </progress>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card bg-cyan">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="icon-pencil white font-large-2 float-xs-left"></i>
                                    </div>
                                    <div class="media-body white text-xs-right">
                                        <h3>278</h3>
                                        <span>New Posts</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-teal">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body white text-xs-left">
                                        <h3>156</h3>
                                        <span>New Clients</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-user1 white font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-deep-orange">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="icon-chat1 white font-large-2 float-xs-left"></i>
                                    </div>
                                    <div class="media-body white text-xs-right">
                                        <h3>156</h3>
                                        <span>New Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-cyan">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body white text-xs-left">
                                        <h3>423</h3>
                                        <span>Support Tickets</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-ios-help-outline white font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ projects table with monthly chart -->
            <div class="row match-height">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <h4 class="card-title">Collapse</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <div id="accordionWrap1" role="tablist">
                                <div class="card collapse-icon panel mb-0 box-shadow-0 no-border">
                                    <div id="heading11" role="tab"
                                         class="card-header border-bottom-grey border-bottom-lighten-2">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion11"
                                           aria-expanded="false" aria-controls="accordion11"
                                           class="h6 indigo collapsed">Accordion Group Item #1</a>
                                    </div>
                                    <div id="accordion11" role="tabpanel" aria-labelledby="heading11"
                                         class="card-collapse collapse" aria-expanded="false">
                                        <div class="card-block">
                                            <p class="card-text">Caramels dessert chocolate cake pastry jujubes bonbon.
                                                Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer
                                                jelly beans croissant apple pie.</p>
                                        </div>
                                    </div>
                                    <div id="heading12" role="tab"
                                         class="card-header border-bottom-grey border-bottom-lighten-2">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion12"
                                           aria-controls="accordion12" class="h6 indigo">Accordion
                                            Group Item #2</a>
                                    </div>
                                    <div id="accordion12" role="tabpanel" aria-labelledby="heading12"
                                         class="card-collapse collapse in">
                                        <div class="card-block">
                                            <p class="card-text">Sugar plum bear claw oat cake chocolate jelly tiramisu
                                                dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat
                                                cake chupa chups.</p>
                                        </div>
                                    </div>
                                    <div id="heading13" role="tab"
                                         class="card-header border-bottom-grey border-bottom-lighten-2">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion13"
                                           aria-expanded="false" aria-controls="accordion13"
                                           class="h6 indigo collapsed">Accordion Group Item #3</a>
                                    </div>
                                    <div id="accordion13" role="tabpanel" aria-labelledby="heading13"
                                         class="card-collapse collapse" aria-expanded="false">
                                        <div class="card-block">
                                            <p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan
                                                jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar
                                                chocolate cake cupcake chocolate topping.</p>
                                        </div>
                                    </div>
                                    <div id="heading14" role="tab"
                                         class="card-header border-bottom-grey border-bottom-lighten-2">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion14"
                                           aria-expanded="false" aria-controls="accordion14"
                                           class="h6 indigo collapsed">Accordion Group Item #4</a>
                                    </div>
                                    <div id="accordion14" role="tabpanel" aria-labelledby="heading14"
                                         class="card-collapse collapse" aria-expanded="false" style="height: 0;">
                                        <div class="card-block">
                                            <p class="card-text">Sesame snaps chocolate lollipop sesame snaps apple pie
                                                chocolate cake sweet roll. Dragée candy canes carrot cake chupa chups
                                                danish cake sugar plum candy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <h4 class="card-title">Video Embed</h4>
                                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            </div>
                            <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                                <iframe class="img-thumbnail"
                                        src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"
                                        allowfullscreen=""></iframe>
                            </div>
                            <div class="card-block">
                                <p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop
                                    macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate
                                    topping. Dessert jelly beans toffee muffin.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <h4 class="card-title">Contact Form</h4>
                                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            </div>
                            <div class="card-block">
                                <form class="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="donationinput1" class="sr-only">Name</label>
                                            <input id="donationinput1" class="form-control"
                                                   placeholder="name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="donationinput2" class="sr-only">Email</label>
                                            <input type="email" id="donationinput2" class="form-control"
                                                   placeholder="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="donationinput7" class="sr-only">Message</label>
                                            <textarea id="donationinput7" rows="5" class="form-control square"
                                                      name="message" placeholder="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-actions center">
                                        <button class="btn btn-outline-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php require_once '../components/footer.php';?>
<?php require_once '../components/scripts.php';?>
</body>
</html>
