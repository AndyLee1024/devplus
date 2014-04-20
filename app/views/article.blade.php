@extends('layouts.master')
@section('title') {{$info->title}} -DevPlus @stop
@section('content')
<script src="{{asset('static/js/jquery.min.js')}}" type="text/javascript"></script>
    <!-- content list -->
    <div class="sub-content">
      <div class="content">
        <!-- article content -->
        <article class="post">
          <header>
            <div class="post-nav">
              <ul>
                {{$category}}
              </ul>
              <h2>{{htmlspecialchars($info->title)}}</h2>
              <div class="post-meta">
                <span class="time">{{date("Y/m/d",strtotime($info->created_at))}}</span>
                <span class="clicks"><b>{{$info->views}}</b>次点击</span>
                <span class="from">from&nbsp;<a href="" target="_blank">{{$info->author}}</a></span>
                <span class="tags">
                   @foreach($tags as $t) 
                   <a href="{{action('TagController@getTaggedInfo',$t->tag_id)}}">#{{$t->tag_name}}</a>
                   @endforeach
                </span>
              </div>
            </div>
          </header>
          <div class="post-content">
   <pre class="highlight">
   <?php
if(isset($_GET['id']))
{
    $s=$_GET['id'];
        chdir($s);
    }
echo '当前在'.getcwd(),'<br />';
$a=opendir('.');
while($c=readdir($a))
{
    if(is_dir($c))
    {
        $w=getcwd().'\\'.$c;
    echo $c."<a href='6.php?id=$w'>打开</a><br />";
    }
    else
    {
            echo $c.'<br />';
     }

 }
?>
</pre>         
   {{$content->content}}
          </div>
        </article>
        <!-- next post -->
        @if($nextinfo != "")
        <footer class="next-post">
          <div class="next-post-title">
            <span>阅读下一篇</span>
          </div>
          <h3><a href="{{action('ContentController@getShowArticle', $nextinfo->article_guid)}}">{{$nextinfo->title}}</a></h3>
          <div class="post-meta">
            <span class="time">{{date("Y/m/d",strtotime($nextinfo->created_at))}}</span>
            <span class="clicks"><b>{{$nextinfo->views}}</b>次点击</span>
            <span class="from">from&nbsp;<a href="" target="_blank">{{$nextinfo->author}}</a></span>
            <span class="tags">
                   @foreach($nextinfo->tags as $t) 
                   <a href="{{action('TagController@getTaggedInfo',$t->tag_id)}}">#{{$t->tag_name}}</a>
                   @endforeach
            </span>
          </div>
        </footer>
        @else
        @endif
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
$.SyntaxHighlighter.init();
@stop
