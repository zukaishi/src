#try:
#    raise KeyboardInterrupt
#finally:
#    print('goodbye, world!')


def divide(x,y):
    try:
        result = x/y
    except ZeroDivisionError:
        print("division by zero!")
    else:
        print("result is ",result)
    finally:
        print("executing finally clause")

