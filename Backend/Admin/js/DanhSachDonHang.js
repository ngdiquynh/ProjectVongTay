function DanhSachDonHang(){
    this.arr= [];
    

    this.themDonHang=function(obj){
        this.arr.push(obj);
    };
    
    this.viTri=function(id){
        return this.arr.findIndex(function(item){
            return id===item.maDonHang;
        })
    };

    this.xoaDon= function(id){
        var viTri = this.viTri(id);
        if (viTri !== -1) {
            this.arr.splice(viTri,1);
        }
    }

    this.thongTinDon = function(id){
        var viTri= this.viTri(id);
        if (viTri !== -1) {
            return this.arr[viTri];
        }
    }

    this.capNhatDon=function(obj){
        var viTri = this.viTri(obj.maDonHang);
        if (viTri !== -1) {
            this.arr[viTri]= obj;
        }
    }
}