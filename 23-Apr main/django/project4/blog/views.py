from django.shortcuts import render

# Create your views here.
def blog_data(request):
    data = {
        'posts': [
        {'title': 'First Post', 'content' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'},
        {'title': 'Second Post', 'content' : 'Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.'},
        {'title': 'Third Post', 'content' : 'Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.'},
        ]
    }
    return render(request, 'blog/blog.html', data)