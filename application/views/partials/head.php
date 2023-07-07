
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/assets/images/favicon.png') ?>">
    <title><?= $title ?></title>
    <!-- Custom CSS -->
    <link href="<?= site_url('assets/assets/extra-libs/c3/c3.min.css') ?> " rel="stylesheet">
    <link href="<?= site_url('assets/assets/libs/chartist/dist/chartist.min.css') ?>" rel="stylesheet">
    <link href="<?= site_url('assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" />
    <!-- <link href="<?= site_url('assets/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.4/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= site_url('assets/dist/css/style.min.css') ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        .mt-alerts {
            position:fixed;
            right:0;
            margin:10px 0px 0px 10px;
            z-index: 999;
        }

        .activity {
            height:400px;
            padding:0px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .users {
            height:400px;
            padding:0px;
            display:block;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .ct-series-a .ct-bar, .ct-series-a .ct-line {
            /* Set the colour of this series line */
            stroke: red;
          }
        .ct-label {
        fill: #000;
        color: #000;
        font-size: .75rem;
        line-height: 1;
          }

</style>
</head>