<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}




const {errorConv}



































// // Enble cors
// app.use(cors());
// app.options('*', cors());

// //jtw authentication

// app.use(passort.initialize());
// passport.use('jwt', jwtStrategy);

// //limit repeated faild rerquests to auth endpoints
// if (config.env === 'production') {
//     app.use('/auth', authLimiter);
// }

// // api routes

// app.use('/auth', authRoutes);

// //send back 404 error for any unknown api request

// app.use((req, res, next) => {
//     next(new NotFoundError());
// });

// //app error handler
// app.use(errorHandler);

// // handle errors

// app.use(errorHandler);

// module.exports = app;


// const myphpadmin = require('myphpadmin');
// const app = require('./Adminlaravel/app');
// const config = require('./Adminlaravel/config/config');
// const logger = require('./Adminlaravel/config/logger');

// let server;
// myphpadmin.connect(config.myphpadmin.url, config.myphpadmin.options)
//     .then(() => {
//         logger.info('Connected to myphpadmin');
//         server = app.listen(config.port, () => {
//             logger.info(`Listening to port ${config.port}`);
//         });
//     });

// const exitHandler = () => {
//     if (server) {
//         server.close(() => {
//             logger.info('Server closed');
//             process.exit(1);
//         });
//     } else {
//         process.exit(1);
//     }
// };

// const unexpectedErrorHandler = (error) => {
//     logger.error(error);
//     exitHandler();
// };

// process.on('uncaughtException', unexpectedErrorHandler);
// process.on('uncaughtRejection', unexpectedErrorHandler);

// process.on('SIGTERM', () => {
//     logger.info('SIGTERM received');
//     if (server) {
//         server.close();
//     }
// });


// const myphpadmin = require('myphpadmin');
// const config = require('./Adminlaravel/config/config');

// const setuptestDB = async () => {
//     await myphpadmin.connect(config.myphpadmin.url, config.myphpadmin.options);
//     await myphpadmin.connection.db.dropDatabase();
//     await myphpadmin.disconnect();
// };


// afterAll(async () => {
//     await setuptestDB();
// });
// module.exports = setuptestDB














// const myphpadmin = require('myphpadmin');
// const brypt = require('bcryptjs');
// const faker = require('faker');
// const User = require('../../src/models/user.model');

// const password = '123456';
// const salt = brcypt.genSaltSync(8);
// const hashedPassword = brcypt.hashSync(password, salt);

// const userOne = {
//     _id: myphpadmin.Types.ObjectId(),
//     name: faker.name.findName(),
//     email: faker.internet.email().toLowerCase(),
//     password: hashedPassword,
//     role: 'user',
//     verified: true,
//     verificationToken: null,
// };
// const usertwo ={
//     _id: myphpadmin.Types.ObjectId(),
//     name: faker.name.findName(),
//     email: faker.internet.email().toLowerCase(),
//     password: hashedPassword,
//     role: 'user',
//     verified: true,
//     verificationToken: null,
// };

// const Admin = {
//     _id: myphpadmin.Types.ObjectId(),
//     name: faker.name.findName(),
//     email: faker.internet.email().toLowerCase(),
//     password: hashedPassword,
//     role: 'admin',
//     verified: true,
//     verificationToken: null,

// };
// const insertUsers = async (users) => {
//     await User.insertMany(users.map((user) => ({ ...user })));
// };













