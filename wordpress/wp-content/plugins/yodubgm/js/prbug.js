var ody=document.getElementById('ydmc');
if (yaudio.paused) {var autopause=0;
ody.className = 'icon-bofang';
} else {var autopause=1;
ody.className = 'icon-music';
}
var otheraudio = document.getElementsByTagName('audio');
if(autopause==1||znst==1){
if(otheraudio.paused || otheraudio.length==0){var znst=0;
           yaudio.play();
           ody.className = 'icon-music';
}
else{var znst=1;
  yaudio.pause();
            ody.className = 'icon-bofang';
}
}