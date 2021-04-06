
<?php


    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            

            case 'product':
                include('pages/product.php');
                break;

            case 'warehouse':
                include('pages/warehouse.php');
                break;

           case 'manufacturer':
                include('pages/manufacturer.php');
                break;

            case 'category':
                include('pages/category.php');
                break;    

            case 'editproduct':
                include('pages/edit_product.php');
                break;

            case 'editwarehouse':
                include('pages/edit_warehouse.php');
                break;    

            case 'editmanufacturer':
                include('pages/edit_manufacturer.php');
                break;    

            case 'editcategory':
                include('pages/edit_category.php');
                break;        

            case 'insertproduct':
                include('pages/insert_product.php');
                break;

            case 'insertwarehouse':
                include('pages/insert_warehouse.php');
                break;

            case 'insertmanufacturer':
                include('pages/insert_manufacturer.php');
                break;

            case 'insertcategory':
                include('pages/insert_category.php');
                break;

            case 'operation':
                include('operation.php');
                break;

        }
        }
    else
        {
            include("pages/home.php");
        }









