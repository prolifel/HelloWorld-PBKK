using System;
using System.Collections.Generic;
using HelloWorldXamarin.ViewModels;
using HelloWorldXamarin.Views;
using Xamarin.Forms;

namespace HelloWorldXamarin
{
    public partial class AppShell : Xamarin.Forms.Shell
    {
        public AppShell()
        {
            InitializeComponent();
            Routing.RegisterRoute(nameof(ItemDetailPage), typeof(ItemDetailPage));
            Routing.RegisterRoute(nameof(NewItemPage), typeof(NewItemPage));
        }

    }
}
