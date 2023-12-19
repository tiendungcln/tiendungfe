<div class="container">
    <div class="row">
        <div class="col-md-3 mt-4">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-dark" aria-current="true"> Sắp xếp theo giá</a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&order=ASC" class="list-group-item list-group-item-action" >+ Sắp xếp giá tăng </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&order=DESC" class="list-group-item list-group-item-action">+ Sắp xếp giá giảm </a>
            </div>
            <br>
            <div class="list-group list-group-flush">
                <a  class="list-group-item list-group-item-action list-group-item-dark" aria-current="true"> Lọc theo giá</a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&max_price=1000000" class="list-group-item list-group-item-action" >+ Dưới 1.000.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=1000000&max_price=5000000" class="list-group-item list-group-item-action">+ 1.000.000đ - 5.000.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=5000000&max_price=7000000" class="list-group-item list-group-item-action">+ 5.000.000đ - 7.000.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=7000000&max_price=10000000" class="list-group-item list-group-item-action">+ 7.000.000đ - 10.000.000đ </a>
                <a href="<?=$_SERVER['REQUEST_URI']?>&min_price=10000000" class="list-group-item list-group-item-action ">+ Trên 10.000.000 đ</a>
            </div>
        </div>
        <div class="col-md-9">
        <div class="text-center mt-2">
            <div class="row">
                <?php foreach($sp_dm as $sp):?>
                <div class="col-md-4 my-3 ">
                    <div class="shadow pb-3 rounded">
                        <a href="?mod=product&act=detail&id=<?=$sp['MaSanPham']?>"><img class="img-fluid mb-2 rounded-top" src="<?='../content/img/'.$sp['HinhAnh']?>" alt=""></a>
                    <p><b><?=$sp['TenSanPham']?></b></p>
                    <span class="text-danger">Giá: <?=$sp['GiaKhuyenMai']?>đ </span> <span> <del> <?=$sp['Gia']?>đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Mua ngay</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </div>
</div>