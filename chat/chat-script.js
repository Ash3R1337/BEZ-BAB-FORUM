var _maxId;
var _messages;

$(document).ready(function(){
 _maxId = 0;
 _messages = [];
 chatRequest();
 setInterval(chatRequest, 2000);

 $('#btnSend').click(function(elem){
        var name = $('#name').val();
        var text = $('#text').val();
        $.post('add.php', {name: name, text: text}, function(){
                $('#text').attr('value', '');
        });
  });
});

function chatRequest()
{
 
  $.post('get_json.php', {maxId: _maxId}, chatResult, 'json');
}

function chatResult(msgs){
 for(var i = 0; i < msgs.length; i++)
 {
        var m = new Object();
        m.dt = msgs[i]['date'];
        m.name = msgs[i]['name'];
        m.text = msgs[i]['text'];
        _messages.push(m);
        _maxId++;
  }
 var html = '';
 if(_messages.length<=5){
    for (var i = _messages.length - 1; i >=0; i--)
    {
      var m = _messages[i];
      if (i%2==1){
        html +='<div class="qbox clearfix"><div class="bname col-md-2 pull-left center-block"><p>'+m.name+'</p></div>';
        html +='<div class="bnameprobel col-md-10 pull-left"></div><div class="clearfix"></div><div class="col-md-2 pull-left"><img src="icon.png" class="img-responsive col-md-10 col-md-push-1" alt=""></div>';
        html +='<div class="bnameprobel col-md-10 pull-left"><blockquote class="post bg-success pull-left"><p >'+m.text+'<span class="data">'+m.dt+'</span></p></blockquote></div></div>';
      }else{
        html +='<div class="qbox clearfix"><div class="bname col-md-2 pull-right center-block"><p>'+m.name+'</p></div>';
        html +='<div class="bnameprobel col-md-10 pull-right"></div><div class="clearfix"></div><div class=" col-md-2 pull-right"><img src="icon.png" class="img-responsive col-md-10 col-md-push-1" alt=""></div>';
        html +='<div class="bnameprobel col-md-10 pull-right"><blockquote class="post bg-info pull-right"><p >'+m.text+'<span class="data">'+m.dt+'</span></p></blockquote></div></div>';
      }
    }
 }else{
    for (var i = _messages.length - 1; i >= _messages.length-5; i--){
      var m = _messages[i];
      if (i%2==1){
        html +='<div class="qbox clearfix"><div class="bname col-md-2 pull-left center-block"><p>'+m.name+'</p></div>';
        html +='<div class="bnameprobel col-md-10 pull-left"></div><div class="clearfix"></div><div class="col-md-2 pull-left"><img src="icon.png" class="img-responsive col-md-9 col-md-push-1" alt=""></div>';
        html +='<div class="bnameprobel col-md-10 pull-left"><blockquote class="post bg-success pull-left"><p >'+m.text+'<span class="data">'+m.dt+'</span></p></blockquote></div></div>';
      }else{ 
        html +='<div class="qbox clearfix"><div class="bname col-md-2 pull-right center-block"><p>'+m.name+'</p></div>';
        html +='<div class="bnameprobel col-md-10 pull-right"></div><div class="clearfix"></div><div class=" col-md-2 pull-right"><img src="icon.png" class="img-responsive col-md-9 col-md-push-1" alt=""></div>';
        html +='<div class="bnameprobel col-md-10 pull-right"><blockquote class="post bg-info pull-right"><p >'+m.text+'<span class="data">'+m.dt+'</span></p></blockquote></div></div>';
      }
   }
 }
 $('#chat').html(html);
}


