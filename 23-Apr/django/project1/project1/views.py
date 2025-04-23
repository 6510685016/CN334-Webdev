from django.http import HttpResponse

def index(request):
    return HttpResponse("Hello, World")

def cn334(request):
    return HttpResponse("Web Application Development")

def article(request, year, month, day):
    return HttpResponse(f"Article: {year}-{month}-{day}")

def course(request, subject, subject_id):
    if subject.upper() == "CN":
        dept_name = "ECE"
    elif subject.upper() == "AE":
        dept_name = "ChE"
    subject_name = subject.upper() + str(subject_id)
    return HttpResponse(f"{dept_name}: {subject_name}")

def search(request):
    q = request.GET.get('q', 'Django')
    id = request.GET.get('id', '1')
    return HttpResponse(f"{q = }<br>\n{id = }")