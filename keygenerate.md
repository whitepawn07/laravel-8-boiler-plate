`ssh-keygen -t rsa -C "johnpaul.sargento29@gmail.com"`

`cat ~/.ssh/id_rsa`



# start the ssh-agent in the background
```eval *ssh-agent -s* ```

# add ssh 
```ssh-add ~/.ssh/id_rsa```

`ssh -T git@github.com`