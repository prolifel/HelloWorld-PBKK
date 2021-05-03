using System;
using System.Collections.Generic;
using System.ComponentModel;
using HelloWorldXamarin.Models;
using HelloWorldXamarin.ViewModels;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace HelloWorldXamarin.Views
{
    public partial class NewItemPage : ContentPage
    {
        public Item Item { get; set; }

        public NewItemPage()
        {
            InitializeComponent();
            BindingContext = new NewItemViewModel();
        }
    }
}