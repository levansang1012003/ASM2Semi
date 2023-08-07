const Category = require ('../models/category');
const Clothes = require ('../models/clothes');


exports.getCategories = (req, res, next) => {
    try {
        const limitNumber = 5;
        const page = req.query.page || 1;
        const offset = (page - 1) * limitNumber;
        Category.find()

            .then(categories => {
                res.render('index', {
                    categories: categories,
                    page: page,
                    limitNumber: limitNumber,
                    offset: offset,
                    title: 'Gucci x Ananas',
                    path: '/',
                    isAuthenticated: req.session.isLoggedIn
                });
            }
            )
            .catch(err => {

    }
    export.explorecategories = async (req, res, next) => {
        try{
            const limitNumber = 20;
            const categories = await Category.find();
            const page = req.query.page || 1;
            const offset = (page - 1) * limitNumber;
            const clothes = await Clothes.find().skip(offset).limit(limitNumber);
            res.render('explore-categories', {
                categories: categories,
                clothes: clothes,
                page: page,
                limitNumber: limitNumber,
                offset: offset,
                title: 'Gucci x Ananas',
                path: '/explore-categories',
                isAuthenticated: req.session.isLoggedIn
            });

        }



















