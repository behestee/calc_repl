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
  

### Solution

Change `#!d:\xampp\php\php.exe` to your php directory path. Sample is for Windows. In linux it should be `#!/usr/bin/php`. 

Then go to the solution directory and run `php calc.php input.txt` command in Windows cmd prompt or `calc.php input.txt` in bash or linux terminal.

