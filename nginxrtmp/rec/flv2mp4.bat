ffmpeg -i "%~ni.flv"  -c copy "%~ni.mp4"
del /a /f /q "%~ni.flv"