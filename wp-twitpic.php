<?php
/*
Plugin Name: wp-twitpic
Plugin URI: http://www.digimantra.com/wp-twitpic
Description: wp-twitpic inserts any image from twitpic into post using the unique hash provided by twitpic.You can change its size, url, alignment etc.Just activate the plugin and use [twitpic id=hash].
Version: 1.0
Author: Sachin Khosla
Author URI: http://www.digimantra.com
*/

function dm_twitpic($atts,$content=null)
{
  extract( shortcode_atts( array(
      'id' => '',
      'target'  => '_blank',
      'align' =>  'center',
      'size'  =>  '',
      'class' =>'',
      'url' =>  'true',
      'myurl' => '',
      'alt' =>  ''
      ),$atts));
  //arrays to avoid typos
  if(trim($id)=='' || $id==null)
    return "";
  $thumb_s=array('small','thumb','thumbs');
  $full_s=array('large','full','big');

  if($size!='')
  {
    if(in_array($size,$thumb_s))
      $size='thumb';
    if(in_array($size,$full_s))
      $size='full';
  }
  else  //if no size is found, default display is thumb
    $size='thumb';
  $imgUrl="http://twitpic.com/show/".$size."/".$id;
  $dim=@getimagesize($imgUrl);
  if ($dim!==false) $dim=$dim[3];
  $twitpiced='';
  $img = "<img src='$imgUrl' $dim  align='$align' alt='$alt' class='align$align $class' />";
  if($url) //need to have twitpic url's reference as stated in their API documentation
    $twitpiced="<a href='http://twitpic.com/$id' target='$target'>$img</a>";
  if($myurl!='' && dm_ValidateUrl($myurl)) //overrides the twitpic url
    $twitpiced="<a href='$myurl' target='$target'>$img</a>";
  return ($twitpiced!='')?$twitpiced:$img;
}
function dm_twitsnaps($atts,$content=null)
{
  extract( shortcode_atts( array(
      'id' => '',
      'target'  => '_blank',
      'align' =>  'center',
      'size'  =>  '',
      'class' =>'',
      'url' =>  'true',
      'myurl' => '',
      'alt' =>  ''
      ),$atts));
  //arrays to avoid typos
  if(trim($id)=='' || $id==null)
    return "";

  $mini_s=array('mini','mobile','tiny');
  $thumb_s=array('small','thumb','thumbs');
  $full_s=array('large','full','big');

  if($size!='')
  {
    if(in_array($size,$mini_s))
      $size='mini';
    if(in_array($size,$thumb_s))
      $size='thumb';
    if(in_array($size,$full_s))
      $size='snap';
  }
  else  //if no size is found, default display is thumb
    $size='thumb';
  $imgUrl="http://ts1.in/".$size."/".$id;
  $dim=@getimagesize($imgUrl);
  if ($dim!==false) $dim=$dim[3];
  $twitpiced='';
  $img = "<img src='$imgUrl' $dim  align='$align' alt='$alt' class='align$align $class' />";
  if($url) //need to have twitpic url's reference as stated in their API documentation
    $twitpiced="<a href='http://twitsnaps.com/full_photo.php?img_id=$id' target='$target'>$img</a>";
  if($myurl!='' && dm_ValidateUrl($myurl)) //overrides the twitpic url
    $twitpiced="<a href='$myurl' target='$target'>$img</a>";
  return ($twitpiced!='')?$twitpiced:$img;
}

function dm_ValidateUrl($url) //function to validate the URL

{
  return filter_var($url, FILTER_VALIDATE_URL);
}
add_shortcode('twitpic','dm_twitpic');
add_shortcode('twitsnaps','dm_twitsnaps');