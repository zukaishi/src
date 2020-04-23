for i in range(1,20):
    w=""
    if i%3==0:w+="Fizz" 
    if i%5==0:w+="Buzz"
    if not w:w=i
    print(w)
