﻿using BugTracker.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace BugTracker.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
           
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        [Authorize(Roles = "admin")]
        public ActionResult Users()
        {
            List<User> users = new List<User>();
            using (ApplicationDbContext db = new ApplicationDbContext())
            {
                users = db.Users.ToList();
                
            }

            return View(users);
        }
    }
}