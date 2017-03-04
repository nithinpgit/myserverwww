<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('assets_url'))
{
    function assets_url()
    {
        return 'https://nithin.online/demos/willcams/assets/';
    }   
}
if ( ! function_exists('upload_url'))
{
    function upload_url()
    {
        return 'https://nithin.online/demos/willcams/uploads/';
    }   
}
if ( ! function_exists('base_folder'))
{
    function base_folder()
    {
        return '/demos/willcams/';
    }   
}
if ( ! function_exists('rtmp'))
{
    function rtmp()
    {
        return 'rtmp://52.76.34.88:1935/live';
    }   
}
?>