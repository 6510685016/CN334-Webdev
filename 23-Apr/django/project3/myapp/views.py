from django.shortcuts import render

# Create your views here.

def plus(request):
    x = float(request.GET.get('x', 0))
    y = float(request.GET.get('y', 0))
    
    data = {
        'x': x,
        'y': y,
        'x_plus_y': x+y,
    }
    return render(request, "myapp/plus.html", data)

def multiply(request, x, y):
    x = float(x)
    y = float(y)
    data = {
        'x': x,
        'y': y,
        'x_multiply_y': x*y,
    }
    return render(request, "myapp/multiply.html", data)
