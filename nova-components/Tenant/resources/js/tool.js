Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'Tenant',
            path: '/Tenant',
            component: require('./components/Tool'),
        },
    ])
})
