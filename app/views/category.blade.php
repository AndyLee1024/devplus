@extends('layouts.master')
@section('title') {{$article_list->title}} - 网站分类 - DevPlus @stop
@section('content')
<!-- content list -->
    <div class="sub-content">
      <div class="content">
        <div class="list-header">
          <ul class="list-order">
            <li><a href="">最新</a></li>
            <li><a class="active" href="">最热</a></li>
          </ul>
          <h2>{{$article_list->title}}</h2>
          <span>共<b>{{$article_list->count}}</b>篇文章</span>
        </div>
        <div class="lists">
          <ul>
          @foreach($article_list as $list)
            <li>
              <div class="list-thumb">
                <img src="{{$list->img}}" alt="">
              </div>
              <div class="list-content">
                <h3><a href="{{action('ContentController@getShowArticle', $list->article_guid)}}">{{$list->title}}</a></h3>
                <div class="post-meta">
                  <span class="time">{{$list->created_at}}</span>
                  <span class="clicks"><b>{{$list->views}}</b>次点击</span>
                  <span class="from">from&nbsp;<a href="#" target="_blank">{{$list->author}}</a></span>
                  <span class="tags">
                     @foreach($list->tags as $tag)
                        <a href="{{action('TagController@getTaggedInfo',$tag->tag_id)}}">#{{$tag->tag_name}}</a>
                     @endforeach
                    </span>
                </div>
              </div>
            </li>
          @endforeach
             
          </ul>
        </div>
        {{$article_list->links()}}
      </div>
      <!-- sidebar -->
      <aside>
        <!-- tags -->
        <div class="side-item">
          <div class="side-item-title">
            <h3>热门标签</h3>
          </div>
          <div class="side-item-content tags">
            <a href="">#Python</a>
            <a href="">#Python</a>
            <a href="">#Python</a>
            <a href="">#Python</a>
            <a href="">#Python</a>
          </div>
        </div>

        <div class="side-item">
          <div class="side-item-title">
            <h3>相关推荐</h3>
          </div>
          <div class="side-item-content list">
            <ul>
              <li><a href="">Javascript的赋值是引用or复制...</a></li>
              <li><a href="">Javascript的赋值是引用or复制...</a></li>
              <li><a href="">Javascript的赋值是引用or复制...</a></li>
              <li><a href="">Javascript的赋值是引用or复制...</a></li>
              <li><a href="">Javascript的赋值是引用or复制...</a></li>
              <li><a href="">Javascript的赋值是引用or复制...</a></li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
    @stop
    @section('script')
    $(document).ready(function(){
       $(".pagenav a:first").addClass('prevpage')
       $(".pagenav a:nth-child(2)").addClass('nextpage')
    })
    @stop