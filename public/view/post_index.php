<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clean Blog - Start Bootstrap Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="./public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="./public/css/clean-blog.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">Re:Build</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                         <span style="color: white; font-size: 13px; margin-right: 20px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ???????????????
                        </span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./post/add">??????</a>
                            <a class="dropdown-item" href="#">??????</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <span style="color: white; font-size: 13px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ??????????????????
                        </span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./category/add">??????</a>
                            <a class="dropdown-item" href="#">??????</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header -->
<header class="masthead">
    <style>
     .masthead{
         height:100px;
     }
    </style>

</header>
<!-- Main Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md todotable" id="todotable1">
        <table class="table table-hover">
          <thead>
          <tr class="tableattr">
            <th scope="col">??????</th>
            <th scope="col">??????</th>
            <th scope="col">???????????????</th>
            <th scope="col"><button id="add-button" onclick="addForm()">+</button></th>
          </tr>
          </thead>
          <tbody class="sortdata" id="sortdata1">
          <tr class="tableattr">
            <th scope="row">test</th>
            <td>??????</td>
            <td>??????</td>
            <td><button class="removebutton" onclick="clickBtn2(this)">-</button></td>
          </tr>
          <tr class="table-primary tableattr">
            <th scope="row">test</th>
            <td>??????</td>
            <td>??????</td>
            <td><button class="removebutton" onclick="clickBtn2(this)">-</button></td>
          </tr>
          <tr class="void">
          </tr>
          </tbody>
        </table>
        </div>
        <div class="col-md todotable" id="todotable2">
        <table class="table table-hover">
          <thead>
          <tr class="tableattr">
            <th scope="col">??????</th>
            <th scope="col">??????</th>
            <th scope="col">???????????????</th>
            <th scope="col"></th>
          </tr>
          </thead>
          <tbody class="sortdata" id="sortdata2">
          <tr class="tableattr">
            <th scope="row">test</th>
            <td>??????</td>
            <td>??????</td>
            <td><button class="removebutton" onclick="clickBtn2(this)">-</button></td>
          </tr>
          <tr class="table-primary tableattr">
            <th scope="row">test</th>
            <td>??????</td>
            <td>??????</td>
            <td><button class="removebutton" onclick="clickBtn2(this)">-</button></td>
          </tr>
          <tr class="void">
          </tr>
          </tbody>
        </table>
        </div>
        <div class="col-md todotable" id="todotable3">
        <table class="table table-hover">
          <thead>
          <tr class="tableattr">
            <th scope="col">??????</th>
            <th scope="col">??????</th>
            <th scope="col">???????????????</th>
            <th scope="col"></th>
          </tr>
          </thead>
          <tbody class="sortdata" id="sortdata3">
          <tr class="tableattr">
            <th scope="row">test</th>
            <td>??????</td>
            <td>??????</td>
            <td><button class="removebutton" onclick="clickBtn2(this)">-</button></td>
          </tr>
          <tr class="table-primary tableattr">
            <th scope="row">test</th>
            <td>??????</td>
            <td>??????</td>
            <td><button class="removebutton" onclick="clickBtn2(this)">-</button></td>
          </tr>
          <tr class="void">
          </tr>
          </tbody>
        </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        <?php                     foreach ( $_SESSION['user'] as $session ) {
                        // ?????????????????????????????????
                            var_dump($session[0]);
                            var_dump($session[1]);
                            var_dump($session[2]);
                            var_dump($session[3]);
                        }?>
            <?php foreach ($posts as $post) { ?>
                
                <div class="post-preview">
                
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $post['title'] ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo nl2br($post['content']) ?>
                        </h3>
                        <i class="far fa-bookmark"></i>
                        <?php echo nl2br($post['category_name']) ?><br>
                        <i class="fas fa-tags"></i>
                    </a>
                    <p class="post-meta">Posted <?php echo $post['date'] ?>???
                </div>
            <?php } ?>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="./public/vendor/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="./public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="../js/clean-blog.min.js"></script>
<script>
  $(function() {
    $( "#sortdata1, #sortdata2, #sortdata3" ).sortable({
        connectWith: ".sortdata"
    });

    $( "#sortdata1" ).on( "sortremove", function( event, ui ) {
        if(!($('#sortdata1 .tableattr').length)){
            $('#sortdata1 .void').css('height','100px');
    }
    } );

    $( "#sortdata1" ).on( "sortreceive", function( event, ui ) {
    $('#sortdata1 .void').css('height','0px');
    $('#sortdata1 .void').appendTo('#sortdata1');
    } );

    $( "#sortdata2" ).on( "sortremove", function( event, ui ) {
        if(!($('#sortdata2 .tableattr').length)){
            $('#sortdata2 .void').css('height','100px');
    }
    } );

    $( "#sortdata2" ).on( "sortreceive", function( event, ui ) {
    $('#sortdata2 .void').css('height','0px');
    $('#sortdata2 .void').appendTo('#sortdata2');
    } );

    $( "#sortdata3" ).on( "sortremove", function( event, ui ) {
        if(!($('#sortdata3 .tableattr').length)){
            $('#sortdata3 .void').css('height','100px');
    }
    } );

    $( "#sortdata3" ).on( "sortreceive", function( event, ui ) {
    $('#sortdata3 .void').css('height','0px');
    $('#sortdata3 .void').appendTo('#sortdata3');
    } );


    $( "#sortdata1, #sortdata2, #sortdata3" ).disableSelection();
  });

  var i = 1 ;
  const add = document.getElementById("sortdata1");
  
  console.log(add);
function addForm() {
    add.insertAdjacentHTML('afterbegin', '<tr class="tableattr"><th scope="row">test</th><td>??????</td><td>??????</td><td><button class="removebutton" onclick="clickBtn2(this)">-</button></td></tr>');
}

function clickBtn2(target){
    let div3 = target.closest(".sortdata");
    console.log(div3.id);
    let index = $(`#${div3.id} .removebutton`).index(target);
    console.log(index);
	
    let children = document.getElementsByClassName(`#${div3.id} .tableattr`);
    div3.removeChild(div3.children[index]);
	
    if(!($(`#${div3.id} .tableattr`).length)){
            $(`#${div3.id} .void`).css('height','100px');
    }
}
</script>
</body>
</html>