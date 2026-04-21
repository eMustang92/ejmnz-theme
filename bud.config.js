// bud.config.js
export default async (bud) => {
  bud
    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })
    .setPublicPath('/app/themes/ejmnz-theme/public/')
    .minimize(bud.isProduction);

  // Tailwind se activa automáticamente vía postcss.config.js
  // Verificar que exista el archivo:
};
