<?php 
    abstract class parents {
        abstract function display ();
    }
    
    class category extends parents {
        public $maChuyenMuc;
        private $tenChuyenMuc;
        private $moTa;

        function __construct($maChuyenMuc,$tenChuyenMuc,$moTa) {
            $this->maChuyenMuc=$maChuyenMuc;
            $this->tenChuyenMuc=$tenChuyenMuc;
            $this->moTa=$moTa;


        }
        function display () {
            return $this->maChuyenMuc."<br>".$this->tenChuyenMuc."<br>".$this->moTa."<br>" ;
        }
    }

    class books extends parents {
        private $isbn;
        private $tieude;
        private $nhaXuatBan;
        private $namXuatBan;
        private $gia;
        function __construct($isbn,$tieude,$nhaXuatBan,$namXuatBan,$gia){
            $this->isbn=$isbn;
            $this->tieude=$tieude;
            $this->nhaXuatBan=$nhaXuatBan;
            $this->namXuatBan=$namXuatBan;
            $this->gia=$gia;

        }
        function display() {
            return $this->isbn .'<br>'.$this->tieude .'<br>'.$this->nhaXuatBan .'<br>'.$this->namXuatBan . '<br>'.$this->gia.'<br>' ;
        }

    };
    class library_book extends books {
        private $id_lib_book;
        private $viTri;
        private $ngayDuaVao;
        private $soLuong;

        public function __construct($isbn,$tieude,$nhaXuatBan,$namXuatBan,$gia,$viTri,$ngayDuaVao,$soLuong ) {
            parent:: __construct($isbn,$tieude,$nhaXuatBan,$namXuatBan,$gia) ;
            
                $this->viTri=$viTri;
                $this->ngayDuaVao=$ngayDuaVao;
                $this->soLuong =$soLuong; 
        }

        

        function display() {
            return   parent::display(). $this->viTri.'<br>'.$this->soLuong.'<br>'.$this->ngayDuaVao.'<br>';
        }
    }
    class author extends parents{
        private $ten;
        private $gioiTinh;
        private $ngaySinh;
        private $diaChi;

        function __construct($ten,$gioiTinh,$ngaySinh,$diaChi){
            $this->ten = $ten;
            $this->gioiTinh = $gioiTinh;
            $this->ngaySinh = $ngaySinh;
            $this->diaChi = $diaChi;

        }
        public function display(){
            return "Tên tác giả :".$this->ten."<br>"."Giới tính: ".$this->gioiTinh."<br>"."Ngày sinh: ".$this->ngaySinh."<br>"."Địa chỉ". $this->diaChi ;
        }
    }

    class loan extends parents {
        private $id;
        private $date;
        private $num;

        public function __contstruct( $id,$date,$num){
            $this->id = $id;
            $this->date = $date;
            $this->num = $num;
        }

        public function display(){
            return "Mã số: ".
            $this->id."<br>"."Ngày mượn: ". $this->date."<br>"."Số lượng mượn: ". $this->num."<br>";
        }
    }
    
    class library extends parents{
        private $id;
        private $addr;

        public function __construct($id,$addr){
            $this->id =$id;
            $this->addr = $addr;
        }
        public function display(){
            return "---------------"."<br>"."Mã: ". $this->id."<br>"."Địa chỉ: ". $this->addr."<br>";
        }
    }

    class student extends parents{
        private $MaSV;
        private $name;
        private $ns;
        private $class;
        private $khoa;

        public function __construct( $MaSV,$name,$ns,$class,$khoa){
            $this->MaSV = $MaSV;
            $this->name =$name;
            $this->ns = $ns;
            $this->class= $class;
            $this->khoa= $khoa;

        }
        public function display(){
            return "<br>"."Mã SV: ". $this->MaSV."<br>"."Tên SV: ". 
            $this->name."<br>"."Ngày sinh: ". $this->ns."<br>"."Lớp :". $this->class."<br>"."Khoa: ". $this->khoa."<br>";
        }
       
    }

    $sach1= new books(1,"Tren duong bang","kim dong","2012",105887);
    echo 'Books: '.$sach1 ->display();

    $lib1 = new library_book (1,"Tren duong bang","kim dong","2012",105887,20,"20/2/2011",50);
    echo '<div style="color:red"> Library book: '.'</div>'. $lib1->display() ;

    $author1 = new author ("Ho Thi Kieu","Nữ","28-11-2003","Quảng Trị");
    echo 'Tác giả: '. $author1->display();

    $student = new student(1,"Ho Thi Kieu","28/11/2003","PNV24A","CNTT");
    echo "---------------"."<br>"."Student"."<br>".$student->display();
    $Loan = new loan ("21C1234","28/11/2023","3");
    echo "---------------"."<br>"."LOAN"."<br>".$Loan->display();
?>