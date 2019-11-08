<?php
    $file = "/tmp/中文名.tar.gz";
 
    $filename = basename($file);
 
    header("Content-type: application/octet-stream");
 
    //处理中文文件名
    $ua = $_SERVER["HTTP_USER_AGENT"];
    $encoded_filename = rawurlencode($filename);
    if (preg_match("/MSIE/", $ua)) {
     header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
    } else if (preg_match("/Firefox/", $ua)) {
     header("Content-Disposition: attachment; filename*=\"utf8''" . $filename . '"');
    } else {
     header('Content-Disposition: attachment; filename="' . $filename . '"');
    }

    /* readfile, 虽然PHP的readfile尝试实现的尽量高效, 不占用PHP本身的内存, 但是实际上它还是需要采用MMAP(如果支持), 或者是一个固定的buffer去循环读取文件, 直接输出.
     输出的时候, 如果是Apache + PHP mod, 那么还需要发送到Apache的输出缓冲区. 最后才发送给用户. 而对于Nginx + fpm如果他们分开部署的话, 那还会带来额外的网络IO.
     */
    header("Content-Length: ". filesize($file));
    readfile($file);
 
    //使用Apache的module mod_xsendfile, 让Apache直接发送这个文件给用户
    //让Xsendfile发送文件
    header("X-Sendfile: $file");
