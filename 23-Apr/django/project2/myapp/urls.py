from django.contrib import admin
from django.urls import path, include
from . import views

urlpatterns = [
    path('', views.index, name="index"),
    path('about/', views.about, name="about"),
    path('test/', views.test, name="test"),
    path('plus/', views.plus, name="plus"),
]
