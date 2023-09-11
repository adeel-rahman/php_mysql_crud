# Enter your code here. Read input from STDIN. Print output to STDOUT
import sys
import re
s=range(int(input()))
reg = re.compile(r'^(?=(?=(?:[a-z\d]*[A-Z]){2})(?=(?:.*\d){3})(?:([a-zA-Z\d])(?!.*\1)){10})[a-zA-Z0-9]+$')
#print(s)
for n in sys.stdin:
    #p=re.match('(?=(?=(.*?[A-Z]){2,}\1)(?=(.*?[0-9]){3,})(?:([A-za-z\d])(?!.*\1)))',n)
    #p=re.match('^(?=(?:[a-z\d]*[A-Z]){2,})$',n)
    #p=re.match('^(?=(?=(.*?[A-Z]){2,}\1)(?=(.*?[0-9]){3,})(.*?\1))$',n)
    #p=re.match('^(?=(?:[a-z\d]*[A-Z]){2})(?=(?:.*\d){3})(?:([a-zA-Z\d])(?!.*\1)){10}',n)
    #print(p)
    if(reg.match(n)):
        print("Valid")
    else:
        print("Invalid")


You and Fredrick are good friends. Yesterday, Fredrick received  credit cards from ABCD Bank. He wants to verify whether his credit card numbers are valid or not. You happen to be great at regex so he is asking for your help!

A valid credit card from ABCD Bank has the following characteristics:

► It must start with a ,  or .
► It must contain exactly  digits.
► It must only consist of digits (-).
► It may have digits in groups of , separated by one hyphen "-".
► It must NOT use any other separator like ' ' , '_', etc.
► It must NOT have  or more consecutive repeated digits.

Examples:

Valid Credit Card Numbers

4253625879615786
4424424424442444
5122-2368-7954-3214
Invalid Credit Card Numbers

42536258796157867       #17 digits in card number → Invalid 
4424444424442444        #Consecutive digits are repeating 4 or more times → Invalid
5122-2368-7954 - 3214   #Separators other than '-' are used → Invalid
44244x4424442444        #Contains non digit characters → Invalid
0525362587961578        #Doesn't start with 4, 5 or 6 → Invalid
Input Format

The first line of input contains an integer .
The next  lines contain credit card numbers.

Constraints


Output Format

Print 'Valid' if the credit card number is valid. Otherwise, print 'Invalid'. Do not print the quotes.

Sample Input

6
4123456789123456
5123-4567-8912-3456
61234-567-8912-3456
4123356789123456
5133-3367-8912-3456
5123 - 3567 - 8912 - 3456
Sample Output

Valid
Valid
Invalid
Valid
Invalid
Invalid
Explanation

4123456789123456 : Valid
5123-4567-8912-3456 : Valid
61234--8912-3456 : Invalid, because the card number is not divided into equal groups of .
4123356789123456 : Valid
51-67-8912-3456 : Invalid, consecutive digits  is repeating  times.
5123456789123456 : Invalid, because space '  ' and - are used as separators.


# Enter your code here. Read input from STDIN. Print output to STDOUT
import sys
import re
s=range(int(input()))
#reg=re.compile(r'((?:(\d{4})\1{3})\d{4}|\d{16})')
#reg=re.compile(r'^(?:(\d{4}))(?:([\d])(?!.*\1){4})[0-9]+$')
#reg=re.compile(r'((?:\d{4}-){3,}\d{4})|\d{16}')
#reg=re.compile(r'((\d)(-?)(?!\2{3})){16}')
#reg=re.compile(r'((\d){4}-?(?!(-?\2){3})){16}')
#reg=re.compile(r'^(?:(\d)\1{1,}(-))$')
reg=re.compile(r'^(?![-\d{4}]*([0-9])(?:-?\1){2,})[456][0-9]{4}-?(\d{4}-){2}\d{4}|\d{16}$')
reg=re.compile(r'^(?![-\d]*([0-9])(?:-?\1){3,})[456][0-9]{3}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}$')
#|(?:(\d{4}-)(?!\1)(?!(.*\1){3}))|\d{16}')
#reg=re.compile(r'((.)(?!(.*\\2{1})))+')
#reg=re.compile(r"^(?:[0-9A-Za-z]+|([._%+-])(?!\1))+$")
#reg=re.compile(r"^((\d{4-})\2?(?!\2))+$")
#(?:[0-9](?!.*\1))
for i in sys.stdin:
    if(reg.match(i)):
        print("Valid")
    else:
        print("Invalid")




A valid postal code  have to fullfil both below requirements:

 must be a number in the range from  to  inclusive.
 must not contain more than one alternating repetitive digit pair.
Alternating repetitive digits are digits which repeat immediately after the next digit. In other words, an alternating repetitive digit pair is formed by two equal digits that have just a single digit between them.

For example:

121426 # Here, 1 is an alternating repetitive digit.
523563 # Here, NO digit is an alternating repetitive digit.
552523 # Here, both 2 and 5 are alternating repetitive digits.
Your task is to provide two regular expressions regex_integer_in_range and regex_alternating_repetitive_digit_pair. Where:

regex_integer_in_range should match only integers range from  to  inclusive

regex_alternating_repetitive_digit_pair should find alternating repetitive digits pairs in a given string.

Both these regular expressions will be used by the provided code template to check if the input string  is a valid postal code using the following expression:

(bool(re.match(regex_integer_in_range, P)) 
and len(re.findall(regex_alternating_repetitive_digit_pair, P)) < 2)
Input Format

Locked stub code in the editor reads a single string denoting  from stdin and uses provided expression and your regular expressions to validate if  is a valid postal code.

Output Format

You are not responsible for printing anything to stdout. Locked stub code in the editor does that.

Sample Input 0

110000
Sample Output 0

False
Explanation 0

1 1 0000 : (0, 0) and (0, 0) are two alternating digit pairs. Hence, it is an invalid postal code.

Note:
A score of  will be awarded for using 'if' conditions in your code.
You have to pass all the testcases to get a positive score.

regex_integer_in_range = r"^[1-9][0-9]{5}$"    # Do not delete 'r'.
regex_alternating_repetitive_digit_pair = r"(\d)(?=\d\1{1,})"#r"^/(\d)(?!\\1)(\d)\\1\\2/$"   # Do not delete 'r'.
#/(\d)(?!\1)(\d)(\1\2)+/   {\d}(?=[\d]*\1){1,}

import re
P = input()

print (bool(re.match(regex_integer_in_range, P)) 
and len(re.findall(regex_alternating_repetitive_digit_pair, P)) < 2)





Neo has a complex matrix script. The matrix script is a  X  grid of strings. It consists of alphanumeric characters, spaces and symbols (!,@,#,$,%,&).

Capture.JPG

To decode the script, Neo needs to read each column and select only the alphanumeric characters and connect them. Neo reads the column from top to bottom and starts reading from the leftmost column.

If there are symbols or spaces between two alphanumeric characters of the decoded script, then Neo replaces them with a single space '' for better readability.

Neo feels that there is no need to use 'if' conditions for decoding.

Alphanumeric characters consist of: [A-Z, a-z, and 0-9].

Input Format

The first line contains space-separated integers  (rows) and  (columns) respectively.
The next  lines contain the row elements of the matrix script.

Constraints


Note: A  score will be awarded for using 'if' conditions in your code.

Output Format

Print the decoded matrix script.

Sample Input 0

7 3
Tsi
h%x
i #
sM 
$a 
#t%
ir!
Sample Output 0

This is Matrix#  %!
Explanation 0

The decoded script is:

This$#is% Matrix#  %!
Neo replaces the symbols or spaces between two alphanumeric characters with a single space   ' ' for better readability.

So, the final decoded script is:

This is Matrix#  %!




#!/bin/python3

import math
import os
import random
import re
import sys




first_multiple_input = input().rstrip().split()

n = int(first_multiple_input[0])

m = int(first_multiple_input[1])

matrix = []

for _ in range(n):
    matrix_item = input()
    matrix.append(matrix_item)

heightlen = len(matrix)
widthlen = len(matrix[0])
cont=""
for i in range(0,widthlen):
    for j in range(0,heightlen):
        cont+=(matrix[j][i])

newString = re.sub('(?<=\w)[^\w]+(?=\w)', " ",cont)
#print(cont)
print(newString)



You are given a set  and  other sets.
Your job is to find whether set  is a strict superset of each of the  sets.

Print True, if  is a strict superset of each of the  sets. Otherwise, print False.

A strict superset has at least one element that does not exist in its subset.

Example
Set is a strict superset of set.
Set is not a strict superset of set.
Set is not a strict superset of set.

Input Format

The first line contains the space separated elements of set .
The second line contains integer , the number of other sets.
The next  lines contains the space separated elements of the other sets.

Constraints

Output Format

Print True if set  is a strict superset of all other  sets. Otherwise, print False.

Sample Input 0

1 2 3 4 5 6 7 8 9 10 11 12 23 45 84 78
2
1 2 3 4 5
100 11 12
Sample Output 0

False
Explanation 0

Set  is the strict superset of the set but not of the set because  is not in set .
Hence, the output is False.

# Enter your code here. Read input from STDIN. Print output to STDOUT
import sys

lis=[]
for line in sys.stdin:
    numbers = line.split()
    lis.append(numbers)
setcnt=lis[0]
setnt=int(lis[1][0])
lnt=len(lis)
nonset=False
for n in range(3,lnt):
    #print(n)
    if(len(list(set(lis[n])-set(lis[0])))>0):
        nonset=True
        
if(nonset):
    print(False)
else:
    print(True)
