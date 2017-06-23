<?php
class ImageHelper{
    //原图片文件，包含路径和文件名
    var $orpic;
    //原图的临时图像
    var $tempic;
    //缩略图
    var $thpic;
    //原宽度
    var $width;
    //原高度
    var $height;
    //图片类型
    var $type;
    //缩略后的宽度
    var $thwidth;
    //缩略后的高度
    var $thheight;

    function __construct($file){
        $this->orpic = $file;
        $infos = getimagesize($file);
        $this->width = $infos[0];
        $this->height = $infos[1];
        $this->type = $infos[2];
    }

    //根据用户所指定最大宽高来计算缩略图尺寸
    function cal_size($maxwidth, $maxheight){
        //缩略图最大宽度与最大高度比
        $thcrown = $maxwidth/$maxheight;
        //原图宽高比
        $crown = $this->width/$this->height;
        if($crown/$thcrown >= 1){
            $this->thwidth = $maxwidth;
            $this->thheight = $maxwidth/$crown;
        } else {
            $this->thheight = $maxheight;
            $this->thwidth = $maxheight*$crown;
        }
    }

    function init(){
        switch($this->type){
            case 1:     //GIF
                $this->tempic = imagecreatefromgif($this->orpic);
                break;
            case 2:     //JPG
                $this->tempic = imagecreatefromjpeg($this->orpic);
                break;
            case 3:     //PNG
                $this->tempic = imagecreatefrompng($this->orpic);
                break;
            default:
                echo '暂不支持该图片格式';
        }
    }

    function resize($maxwidth, $maxheight){
        //初始化图像
        $this->init();
        //计算出缩略图尺寸
        $this->cal_size($maxwidth, $maxheight);

        $this->thpic = imagecreatetruecolor($this->thwidth, $this->thheight);
        imagecopyresampled($this->thpic, $this->tempic, 0, 0, 0 ,0, $this->thwidth, $this->thheight, $this->width, $this->height);
    }

    function save($filename, $type){
        switch($type){
            case 'jpg':
            case 'jpeg':
                imagejpeg($this->thpic, $filename);
                break;
            case 'png':
                imagepng($$this->thpic, $filename);
                break;
            case 'gif':
                imagegif($$this->thpic, $filename);
                break;
            default:
                echo '暂不支持您所选择的格式';
        }
    }

    public function imagezoon($file){
        //图片的等比缩放

        //因为PHP只能对资源进行操作，所以要对需要进行缩放的图片进行拷贝，创建为新的资源
        $src=imagecreatefromjpeg($file);

        //取得源图片的宽度和高度
        $size_src=getimagesize($file);
        $w=$size_src['0'];
        $h=$size_src['1'];

        //指定缩放出来的最大的宽度（也有可能是高度）
        $max=1024;

        //根据最大值为300，算出另一个边的长度，得到缩放后的图片宽度和高度
        if($w > $h){
            $w=$max;
            $h=$h*($max/$size_src['0']);
        }else{
            $h=$max;
            $w=$w*($max/$size_src['1']);
        }


//声明一个$w宽，$h高的真彩图片资源
        $image=imagecreatetruecolor($w, $h);


//关键函数，参数（目标资源，源，目标资源的开始坐标x,y, 源资源的开始坐标x,y,目标资源的宽高w,h,源资源的宽高w,h）
        imagecopyresampled($image, $src, 0, 0, 0, 0, $w, $h, $size_src['0'], $size_src['1']);

//告诉浏览器以图片形式解析
        header('content-type:image/png');
        imagepng($image);

//销毁资源
        imagedestroy($image);
    }

}