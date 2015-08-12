## Basic Calculator

Creating a `calc` program, which will take a _filename_ as it's _first argument_. Then read the content of that file and store it in memory. After that, it will take the following commands like a [REPL](https://en.wikipedia.org/wiki/Read%E2%80%93eval%E2%80%93print_loop).

### Commands:

- `add <number>`
  > It will add `number` to the current value in memory, then write it back to the file and print the result
  
- `sub <number>`
  > It will subtract `number` from the current value in memory, then write it back to the file and print the result

- `show`
  > It will print the the current value in memory

- `clear`
  > It will clear the the current value in memory, then write it back to the file and print the result

- `exit`
  > Quit
  
### Sample Input Output

file1.txt
```
10
```


```
$ calc file1.txt
10 
> add 2
12
> sub 10
2
> add 5
7
> show
7
> lol
invalid command
> clear
0
> exit
```

### Solution
Change `#!d:\xampp\php\php.exe` to your php directory path. Sample if for Windows. In linux usually it should be `#!/usr/bin/php`
Then go to the solution directory and run `php calc.php input.txt` command in Windows cmd prompt or `calc.php input.txt` in bash or linux terminal.

