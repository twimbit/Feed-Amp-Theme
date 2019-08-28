!(function(t) {
  function e(e) {
    for (
      var n, a, s = e[0], l = e[1], d = e[2], u = 0, c = [];
      u < s.length;
      u++
    )
      (a = s[u]), o[a] && c.push(o[a][0]), (o[a] = 0);
    for (n in l) Object.prototype.hasOwnProperty.call(l, n) && (t[n] = l[n]);
    for (h && h(e); c.length; ) c.shift()();
    return r.push.apply(r, d || []), i();
  }
  function i() {
    for (var t, e = 0; e < r.length; e++) {
      for (var i = r[e], n = !0, s = 1; s < i.length; s++) {
        var l = i[s];
        0 !== o[l] && (n = !1);
      }
      n && (r.splice(e--, 1), (t = a((a.s = i[0]))));
    }
    return t;
  }
  var n = {},
    o = {
      1: 0
    },
    r = [];
  function a(e) {
    if (n[e]) return n[e].exports;
    var i = (n[e] = {
      i: e,
      l: !1,
      exports: {}
    });
    return t[e].call(i.exports, i, i.exports, a), (i.l = !0), i.exports;
  }
  (a.m = t),
    (a.c = n),
    (a.d = function(t, e, i) {
      a.o(t, e) ||
        Object.defineProperty(t, e, {
          enumerable: !0,
          get: i
        });
    }),
    (a.r = function(t) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(t, Symbol.toStringTag, {
          value: "Module"
        }),
        Object.defineProperty(t, "__esModule", {
          value: !0
        });
    }),
    (a.t = function(t, e) {
      if ((1 & e && (t = a(t)), 8 & e)) return t;
      if (4 & e && "object" == typeof t && t && t.__esModule) return t;
      var i = Object.create(null);
      if (
        (a.r(i),
        Object.defineProperty(i, "default", {
          enumerable: !0,
          value: t
        }),
        2 & e && "string" != typeof t)
      )
        for (var n in t)
          a.d(
            i,
            n,
            function(e) {
              return t[e];
            }.bind(null, n)
          );
      return i;
    }),
    (a.n = function(t) {
      var e =
        t && t.__esModule
          ? function() {
              return t.default;
            }
          : function() {
              return t;
            };
      return a.d(e, "a", e), e;
    }),
    (a.o = function(t, e) {
      return Object.prototype.hasOwnProperty.call(t, e);
    }),
    (a.p = "");
  var s = (window.webpackJsonp = window.webpackJsonp || []),
    l = s.push.bind(s);
  (s.push = e), (s = s.slice());
  for (var d = 0; d < s.length; d++) e(s[d]);
  var h = l;
  r.push([64, 0]), i();
})({
  0: function(t, e, i) {
    "use strict";
    var n = i(1),
      o = i.n(n),
      r = (window && window.ActiveCTests) || {};
    var a = void 0,
      s = t => parseInt(t.split("-")[1], 10),
      l = i(8),
      d = i.n(l),
      h = window.appConfig;
    "1" !== d.a.get("trvDebug") && (window.appConfig = void 0);
    var u = h,
      c = o()(u, "initialValues.group", null),
      f = o()(u, "tracking.tid", null),
      v = void 0 !== r["WEB-47776"],
      p = t => [t.hostname, t.port, t.protocol].join(),
      w = () => {
        var t = {
          "X-Trv-Group": c,
          "X-Trv-Tid": f
        };
        return (
          v &&
            (t["X-Trivago-CTest"] = (() => (
              a || (a = Object.keys(r).map(s)), a
            ))()),
          t
        );
      },
      m = t =>
        (t => {
          try {
            return p(document.location) !== p(new URL(t));
          } catch (t) {
            return !1;
          }
        })(t)
          ? {}
          : w();
    i.d(e, "a", function() {
      return g;
    });
    var g = t => {
      var e = (t => {
        var e = new URLSearchParams();
        e.append("sLog", t);
        var i = `/search/log?${e.toString()}`;
        return new Request(i, {
          method: "GET",
          credentials: "include",
          cache: "no-store"
        });
      })(t);
      return fetch(e, {
        credentials: "include",
        headers: m(e.url)
      });
    };
  },
  11: function(t, e, i) {},
  14: function(t, e, i) {
    var n = i(16),
      o = i(2),
      r = "Expected a function";
    t.exports = function(t, e, i) {
      var a = !0,
        s = !0;
      if ("function" != typeof t) throw new TypeError(r);
      return (
        o(i) &&
          ((a = "leading" in i ? !!i.leading : a),
          (s = "trailing" in i ? !!i.trailing : s)),
        n(t, e, {
          leading: a,
          maxWait: e,
          trailing: s
        })
      );
    };
  },
  15: function(t, e) {
    t.exports =
      '<svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="24" height="24" viewBox="0 0 24 24">\n    <path class="svg-color--primary" fill="#37454D"\n          d="M19.8 5h-1.1c.1-.6.1-1 .1-1 0-.6-.5-1-1-1h-12c-.5 0-1 .4-1 1 0 0 0 .4.1 1H3.8c-.5 0-1 .4-1 1 0 .2 0 2.2 2.3 4.1.7.6 1.6 1 2.6 1.4.7.6 1.6 1.1 2.5 1.4L9.9 16H8.8c-.4 0-.8.3-1 .7l-1 3c-.1.3 0 .6.1.9.3.3.6.4.9.4h8c.3 0 .6-.1.8-.4.2-.3.2-.6.1-.9l-1-3c-.1-.4-.5-.7-1-.7h-1.1l-.3-3.2c1-.2 1.8-.7 2.5-1.4 1-.3 1.9-.8 2.6-1.4 2.2-1.9 2.3-3.9 2.3-4.1.1-.5-.3-.9-.9-.9zm-14-1h12s0 .4-.1 1c0 .3-.1.6-.2 1-.2.9-.5 2.1-1.2 3.3-.3.5-.6.9-.9 1.2-.6.6-1.3 1-2.1 1.2-.3.2-.8.3-1.5.3 0 0 .1 0 0 0h-.5c-.4 0-.7-.1-1-.2-.8-.2-1.6-.7-2.2-1.2-.4-.4-.7-.8-.9-1.2-.6-1.3-.9-2.5-1.1-3.4-.1-.4-.3-2-.3-2zm-2 2H5c.2 1 .6 2.4 1.3 3.8-.1-.2-.3-.3-.5-.5-1.9-1.6-2-3.2-2-3.3zm11 11l1 3h-8l1-3h6zm-3.9-1l.3-3h1.2l.3 3h-1.8zm7-6.7c-.2.2-.4.3-.6.5C18 8.4 18.4 7 18.6 6h1.2c0 .1 0 1.7-1.9 3.3z"/>\n</svg>\n';
  },
  16: function(t, e, i) {
    var n = i(2),
      o = i(17),
      r = i(20),
      a = "Expected a function",
      s = Math.max,
      l = Math.min;
    t.exports = function(t, e, i) {
      var d,
        h,
        u,
        c,
        f,
        v,
        p = 0,
        w = !1,
        m = !1,
        g = !0;
      if ("function" != typeof t) throw new TypeError(a);
      function y(e) {
        var i = d,
          n = h;
        return (d = h = void 0), (p = e), (c = t.apply(n, i));
      }
      function x(t) {
        var i = t - v;
        return void 0 === v || i >= e || i < 0 || (m && t - p >= u);
      }
      function b() {
        var t = o();
        if (x(t)) return S(t);
        f = setTimeout(
          b,
          (function(t) {
            var i = e - (t - v);
            return m ? l(i, u - (t - p)) : i;
          })(t)
        );
      }
      function S(t) {
        return (f = void 0), g && d ? y(t) : ((d = h = void 0), c);
      }
      function T() {
        var t = o(),
          i = x(t);
        if (((d = arguments), (h = this), (v = t), i)) {
          if (void 0 === f)
            return (function(t) {
              return (p = t), (f = setTimeout(b, e)), w ? y(t) : c;
            })(v);
          if (m) return (f = setTimeout(b, e)), y(v);
        }
        return void 0 === f && (f = setTimeout(b, e)), c;
      }
      return (
        (e = r(e) || 0),
        n(i) &&
          ((w = !!i.leading),
          (u = (m = "maxWait" in i) ? s(r(i.maxWait) || 0, e) : u),
          (g = "trailing" in i ? !!i.trailing : g)),
        (T.cancel = function() {
          void 0 !== f && clearTimeout(f), (p = 0), (d = v = h = f = void 0);
        }),
        (T.flush = function() {
          return void 0 === f ? c : S(o());
        }),
        T
      );
    };
  },
  17: function(t, e, i) {
    var n = i(3);
    t.exports = function() {
      return n.Date.now();
    };
  },
  20: function(t, e, i) {
    var n = i(2),
      o = i(4),
      r = NaN,
      a = /^\s+|\s+$/g,
      s = /^[-+]0x[0-9a-f]+$/i,
      l = /^0b[01]+$/i,
      d = /^0o[0-7]+$/i,
      h = parseInt;
    t.exports = function(t) {
      if ("number" == typeof t) return t;
      if (o(t)) return r;
      if (n(t)) {
        var e = "function" == typeof t.valueOf ? t.valueOf() : t;
        t = n(e) ? e + "" : e;
      }
      if ("string" != typeof t) return 0 === t ? t : +t;
      t = t.replace(a, "");
      var i = l.test(t);
      return i || d.test(t) ? h(t.slice(2), i ? 2 : 8) : s.test(t) ? r : +t;
    };
  },
  61: function(t, e, i) {},
  64: function(t, e, i) {
    "use strict";
    i.r(e);
    var n = i(14),
      o = i.n(n);
    var r =
      Object.assign ||
      function(t) {
        for (var e = 1; e < arguments.length; e++) {
          var i = arguments[e];
          for (var n in i)
            Object.prototype.hasOwnProperty.call(i, n) && (t[n] = i[n]);
        }
        return t;
      };
    var a = () => {},
      s = t => t,
      l = () => {
        throw new Error("Layers must implement an `create` method.");
      },
      d = (t, e) => {
        if (Array.isArray(t))
          for (var i = 0, n = t.length; i < n; i++) {
            t[i].mount(e);
          }
        else e.appendChild(t);
      },
      h = (t, e) => {
        if (Array.isArray(t))
          for (var i = 0, n = t.length; i < n; i++) {
            t[i].unmount(e);
          }
        else e.removeChild(t);
      },
      u = t => t instanceof Element && "function" == typeof t.getContext;
    function c(t) {
      var e = t.getInitialState,
        i = void 0 === e ? s : e,
        n = t.initialize,
        o = void 0 === n ? a : n,
        c = t.create,
        f = void 0 === c ? l : c,
        v = t.mount,
        p = void 0 === v ? d : v,
        w = t.didMount,
        m = void 0 === w ? a : w,
        g = t.willMount,
        y = void 0 === g ? a : g,
        x = t.unmount,
        b = void 0 === x ? h : x,
        S = t.willUpdate,
        T = void 0 === S ? a : S,
        E = t.update,
        O = void 0 === E ? a : E,
        C = t.didUpdate,
        M = void 0 === C ? a : C,
        k = t.willUnmount,
        z = void 0 === k ? a : k,
        j = (function(t, e) {
          var i = {};
          for (var n in t)
            e.indexOf(n) >= 0 ||
              (Object.prototype.hasOwnProperty.call(t, n) && (i[n] = t[n]));
          return i;
        })(t, [
          "getInitialState",
          "initialize",
          "create",
          "mount",
          "didMount",
          "willMount",
          "unmount",
          "willUpdate",
          "update",
          "didUpdate",
          "willUnmount"
        ]);
      class P {
        constructor(t) {
          (this.mounted = !1), (this.state = i(t)), o.call(this);
          var e = (this.el = f.call(this, this.state));
          u(e) && (this.ctx = e.getContext("2d"));
        }
        mount(t) {
          if (this.mounted)
            throw new Error("A layer can only be mounted once.");
          y.call(this),
            p.call(this, this.el, t),
            (this.mounted = !0),
            O.call(this, this.ctx || this.el, this.state),
            m.call(this);
        }
        unmount(e) {
          if (!this.mounted) throw new Error("The layer is not mounted.");
          for (var i in (z.call(this), b.call(this, this.el, e), this))
            !this.hasOwnProperty(i) || i in t || (this[i] = void 0);
        }
        setState(t) {
          var e = this.state,
            i = r({}, e, t);
          (function(t, e) {
            if (t === e) return !0;
            var i = Object.keys(t),
              n = Object.keys(e),
              o = i.length;
            if (n.length !== o) return !1;
            for (var r = 0; r < o; r++) {
              var a = i[r];
              if (t[a] !== e[a]) return !1;
            }
            return !0;
          })(i, e) ||
            (T.call(this, i),
            (this.state = i),
            this.mounted &&
              requestAnimationFrame(() => {
                O.call(this, this.ctx || this.el, i), M.call(this, e);
              }));
        }
      }
      return Object.assign(P.prototype, j), P;
    }
    var f = {
        0: [[1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        1: [[1, 1], [0, 1], [0, 1], [0, 1], [0, 1], [0, 1]],
        2: [[1, 1, 1], [0, 0, 1], [1, 1, 1], [1, 0, 0], [1, 0, 0], [1, 1, 1]],
        3: [[1, 1, 1], [0, 0, 1], [0, 1, 1], [0, 0, 1], [0, 0, 1], [1, 1, 1]],
        4: [[1, 0, 1], [1, 0, 1], [1, 1, 1], [0, 0, 1], [0, 0, 1], [0, 0, 1]],
        5: [[1, 1, 1], [1, 0, 0], [1, 1, 1], [0, 0, 1], [0, 0, 1], [1, 1, 1]],
        6: [[1, 1, 1], [1, 0, 0], [1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        7: [[1, 1, 1], [0, 0, 1], [0, 0, 1], [0, 0, 1], [0, 0, 1], [0, 0, 1]],
        8: [[1, 1, 1], [1, 0, 1], [1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        9: [[1, 1, 1], [1, 0, 1], [1, 1, 1], [0, 0, 1], [0, 0, 1], [1, 1, 1]],
        a: [[1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1], [1, 0, 1], [1, 0, 1]],
        b: [[1, 0, 0], [1, 0, 0], [1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        c: [[1, 1, 1], [1, 0, 0], [1, 0, 0], [1, 0, 0], [1, 0, 0], [1, 1, 1]],
        d: [[0, 0, 1], [0, 0, 1], [1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        e: [[1, 1, 1], [1, 0, 0], [1, 1, 0], [1, 0, 0], [1, 0, 0], [1, 1, 1]],
        f: [[1, 1, 1], [1, 0, 0], [1, 1, 1], [1, 0, 0], [1, 0, 0], [1, 0, 0]],
        g: [[1, 1, 1], [1, 0, 0], [1, 0, 0], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        h: [[1, 0, 1], [1, 0, 1], [1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1]],
        i: [[1], [0], [1], [1], [1], [1]],
        j: [[0, 0, 1], [0, 0, 0], [0, 1, 1], [0, 0, 1], [1, 0, 1], [1, 1, 1]],
        k: [[1, 0, 0], [1, 0, 1], [1, 1, 1], [1, 1, 1], [1, 0, 1], [1, 0, 1]],
        l: [[1, 0, 0], [1, 0, 0], [1, 0, 0], [1, 0, 0], [1, 0, 0], [1, 1, 1]],
        m: [
          [0, 1, 0, 1, 0],
          [1, 1, 1, 1, 1],
          [1, 0, 1, 0, 1],
          [1, 0, 1, 0, 1],
          [1, 0, 0, 0, 1],
          [1, 0, 0, 0, 1]
        ],
        n: [[1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1]],
        o: [[1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        p: [[1, 1, 1], [1, 0, 1], [1, 1, 1], [1, 0, 0], [1, 0, 0], [1, 0, 0]],
        q: [[1, 1, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1], [0, 0, 1]],
        r: [[1, 1, 1], [1, 0, 1], [1, 1, 1], [1, 1, 0], [1, 0, 1], [1, 0, 1]],
        s: [[1, 1, 1], [1, 0, 0], [1, 1, 1], [0, 0, 1], [0, 0, 1], [1, 1, 1]],
        t: [[1, 0, 0], [1, 0, 0], [1, 1, 0], [1, 0, 0], [1, 0, 0], [1, 1, 1]],
        u: [[1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1]],
        v: [[1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 0, 1], [1, 1, 1], [0, 1, 0]],
        w: [
          [1, 0, 0, 0, 1],
          [1, 0, 0, 0, 1],
          [1, 0, 1, 0, 1],
          [1, 0, 1, 0, 1],
          [1, 1, 1, 1, 1],
          [0, 1, 0, 1, 0]
        ],
        x: [
          [1, 0, 0, 0, 1],
          [1, 1, 0, 1, 1],
          [0, 1, 1, 1, 0],
          [0, 1, 1, 1, 0],
          [1, 1, 0, 1, 1],
          [1, 0, 0, 0, 1]
        ],
        y: [[1, 0, 1], [1, 0, 1], [1, 1, 1], [0, 1, 0], [0, 1, 0], [0, 1, 0]],
        z: [[1, 1, 1], [0, 0, 1], [1, 1, 1], [1, 0, 0], [1, 0, 0], [1, 1, 1]],
        " ": [[0], [0], [0], [0], [0], [0]],
        "!": [[1], [1], [1], [1], [0], [1]],
        ".": [[0], [0], [0], [0], [0], [1]]
      },
      v = t => Math.floor(Math.random() * t),
      p = ({
        visited: t = !1,
        fill: e = !1,
        up: i = !0,
        right: n = !0,
        down: o = !0,
        left: r = !0,
        x: a,
        y: s
      }) => ({
        visited: t,
        fill: e,
        up: i,
        right: n,
        down: o,
        left: r,
        x: a,
        y: s
      }),
      w = (t, e, i) => {
        for (
          var n = {},
            o = (t => {
              for (var e = [], i = 0; i < 6; i++)
                for (var n in ((e[i] = []), t)) {
                  var o = t[n],
                    r = f[o];
                  e[i].push(...r[i]), e[i].push(0);
                }
              return e;
            })(t),
            r = Math.round(e / 2 - o[0].length / 2),
            a = Math.round(i / 2 - o.length / 2),
            s = 0;
          s < o.length;
          s++
        )
          for (var l = o[s], d = 0; d < l.length; d++)
            o[s][d] &&
              ((n[d + r] = n[d + r] || {}),
              (n[d + r][s + a] = p({
                visited: !0,
                fill: !0,
                up: !(o[s - 1] && o[s - 1][d]),
                right: !o[s][d + 1],
                down: !(o[s + 1] && o[s + 1][d]),
                left: !o[s][d - 1],
                x: d,
                y: s
              })));
        return n;
      },
      m = (t, e, i, n, o) => {
        var r = [],
          a = ((t, e, i) => {
            for (var n = [], o = 0; o < t; o++)
              for (var r = (n[o] = []), a = 0; a < e; a++) {
                var s = i[o] && i[o][a];
                r.push(
                  s ||
                    p({
                      x: o,
                      y: a
                    })
                );
              }
            return n;
          })(t, e, o),
          s = a[v(t)][v(e)],
          l = void 0;
        s.visited = !0;
        var d = ({ x: t, y: e }) => i.x === t && i.y === e,
          h = ({ x: t, y: e }) => n.x === t && n.y === e,
          u = () => {
            (l = y(a, s)) &&
              ((l.visited = !0),
              ((t, e) => {
                t.x === e.x
                  ? (t.y < e.y && ((t.down = !1), (e.up = !1)),
                    t.y > e.y && ((t.up = !1), (e.down = !1)))
                  : t.y === e.y &&
                    (t.x < e.x && ((t.right = !1), (e.left = !1)),
                    t.x > e.x && ((t.left = !1), (e.right = !1)));
              })(s, l),
              r.push(s),
              (s = l));
          };
        for (u(); 0 !== r.length; )
          x(a, s) || h(s) || d(s) ? ((l = r.pop()), (s = l)) : u();
        var c = a[0][0],
          f = c.up,
          w = c.right,
          g = c.down,
          b = c.left;
        return f && w && g && b ? m(t, e, i, n, o) : a;
      },
      g = (t, e) => {
        var i = e.x,
          n = e.y,
          o = [],
          r = t.length,
          a = t[0].length;
        return (
          0 != n && o.push(t[i][n - 1]),
          n != a - 1 && o.push(t[i][n + 1]),
          0 != i && o.push(t[i - 1][n]),
          i != r - 1 && o.push(t[i + 1][n]),
          o
        );
      },
      y = (t, e) => {
        var i = ((t, e) => {
          for (var i = [], n = g(t, e), o = 0; o < n.length; o++)
            n[o].visited || i.push(n[o]);
          return i;
        })(t, e);
        return i[v(i.length)];
      },
      x = (t, e) => {
        for (var i = g(t, e), n = 0; n < i.length; n++)
          if (!i[n].visited) return !1;
        return !0;
      },
      b = (t, e, i) => {
        var n = w(i, t, e),
          o = {
            x: 0,
            y: 0
          },
          r = {
            x: t - 1,
            y: e - 1
          },
          a = m(t, e, o, r, n);
        return {
          get: ({ x: t, y: e }) => a[t][e],
          getWidth: () => t,
          getHeight: () => e,
          getEnd: () => r,
          inBounds: ({ x: i, y: n }) => i >= 0 && i < t && n >= 0 && n < e,
          isStart: ({ x: t, y: e }) => o.x === t && o.y === e,
          isEnd: ({ x: t, y: e }) => r.x === t && r.y === e,
          end: r
        };
      },
      S = (t, e) => {
        var i = t.style;
        for (var n in e) i[n] = e[n];
        return t;
      },
      T = ["className", "innerHTML"],
      E = (t, e) => {
        var i = typeof e;
        return "object" === i || "function" === i || T.indexOf(t) > -1;
      },
      O = (t, e) => {
        for (var i in e) {
          var n = e[i];
          "ref" !== i
            ? "style" !== i || "string" == typeof n
              ? E(i, n)
                ? (t[i] = n)
                : null !== n
                ? t.setAttribute(i, n)
                : t.removeAttribute(i)
              : S(t, n)
            : n(t);
        }
        return t;
      },
      C = (t, e, ...i) => {
        if ("function" == typeof t) return (e.children = i), t(e);
        var n = document.createElement(t);
        e && O(n, e);
        for (var o = 0, r = i.length; o < r; o++) {
          var a = i[o];
          "string" == typeof a && (a = document.createTextNode(a)),
            n.appendChild(a);
        }
        return n;
      },
      M = window.devicePixelRatio || 1,
      k = t =>
        t.webkitBackingStorePixelRatio ||
        t.mozBackingStorePixelRatio ||
        t.msBackingStorePixelRatio ||
        t.oBackingStorePixelRatio ||
        t.backingStorePixelRatio ||
        1;
    function z(t, e, i = 0, n = 0) {
      var o = C("canvas", {
          width: t,
          height: e,
          style: {
            position: "absolute",
            left: i + "px",
            top: n + "px",
            width: t + "px",
            height: e + "px"
          }
        }),
        r = o.getContext("2d"),
        a = k(r),
        s = M / a;
      return (
        1 !== s &&
          (O(o, {
            width: t * s,
            height: e * s
          }),
          r.scale(s, s)),
        o
      );
    }
    var j = (t, e, i, n, o, r, a) => {
        t.beginPath(),
          (t.lineCap = "square"),
          (t.strokeStyle = a),
          (t.lineWidth = r),
          t.moveTo(e, i),
          t.lineTo(n, o),
          t.stroke();
      },
      P = (t, e, i, n, o, r) => {
        var a = i.cellSize,
          s = i.wallsWidth,
          l = n * a + s,
          d = o * a + s;
        e.fill &&
          ((t, e, i, n, o, r) => {
            (t.fillStyle = r), t.fillRect(e, i, n, o);
          })(t, l, d, a, a, r);
      },
      W = (t, e, i, n, o, r) => {
        var a = i.cellSize,
          s = i.wallsWidth,
          l = e.get({
            x: n,
            y: o
          }),
          d = n * a + s / 2,
          h = o * a + s / 2;
        l.up && !e.isStart(l) && j(t, d, h, d + a, h, s, r),
          l.down && !e.isEnd(l) && j(t, d, h + a, d + a, h + a, s, r),
          l.right && j(t, d + a, h, d + a, h + a, s, r),
          l.left && j(t, d, h, d, h + a, s, r);
      },
      A = c({
        create({ layout: t }) {
          var e = t.width,
            i = t.height,
            n = t.offsetX,
            o = t.offsetY,
            r = t.wallsWidth;
          return z(e, i, n - r / 2, o - r / 2);
        },
        update(t, e) {
          var i = e.maze,
            n = e.layout,
            o = e.finished,
            r = n.cellSize,
            a = n.width,
            s = n.height,
            l = n.wallsWidth,
            d = i.getEnd(),
            h = o ? "#f9c77f" : "#007fad";
          t.clearRect(0, 0, a, s);
          for (var u = 0; u < i.getHeight(); u++)
            for (var c = 0; c < i.getWidth(); c++) {
              var f = i.get({
                x: c,
                y: u
              });
              o || P(t, f, n, c, u, "#e5f2f6"), W(t, i, n, c, u, h);
            }
          ((t, e, i, n, o) => {
            var r = n / 2;
            (t.fillStyle = o),
              t.beginPath(),
              t.moveTo(e - r, i),
              t.lineTo(e, i - r),
              t.lineTo(e + r, i),
              t.lineTo(e, i + r),
              t.lineTo(e - r, i),
              t.fill();
          })(
            t,
            Math.ceil((d.x + 0.5) * r + l / 2),
            Math.ceil((d.y + 0.5) * r + l / 2),
            Math.ceil(r / 2),
            "#f9c77f"
          );
        }
      }),
      L = {
        x: 0,
        y: 0
      },
      R = c({
        create(t) {
          var e = t.layout;
          return z(e.width, e.height, e.offsetX, e.offsetY);
        },
        willUpdate(t) {
          var e = this.state,
            i = e.finished,
            n = e.layout,
            o = t.finished;
          if (i && !o) {
            var r = n.width,
              a = n.height;
            this.ctx.clearRect(0, 0, r, a);
          }
        },
        update(t, e) {
          var i = e.path,
            n = e.layout,
            o = e.finished,
            r = n.pathWidth,
            a = n.cellSize,
            s = o ? "#f9c77f" : "#bfdfea",
            l = i[i.length - 3] || L,
            d = i[i.length - 2] || L,
            h = i[i.length - 1] || L;
          (t.lineWidth = r),
            (t.strokeStyle = s),
            (t.lineCap = "square"),
            t.beginPath(),
            t.moveTo((l.x + 0.5) * a, (l.y + 0.5) * a),
            t.lineTo((d.x + 0.5) * a, (d.y + 0.5) * a),
            t.stroke(),
            (t.lineCap = "round"),
            t.lineTo((h.x + 0.5) * a, (h.y + 0.5) * a),
            t.stroke();
        }
      }),
      _ = c({
        create(t) {
          var e = t.layout,
            i = e.pathWidth,
            n = e.offsetX,
            o = e.offsetY;
          return C("div", {
            style: {
              backgroundColor: "#007fad",
              height: i + "px",
              width: i + "px",
              borderRadius: "100px",
              position: "absolute",
              left: -i / 2 + n + "px",
              top: -i / 2 + o + "px",
              transition: "transform 100ms, box-shadow 200ms"
            }
          });
        },
        update(t, e) {
          var i = e.position,
            n = e.layout.cellSize,
            o = Math.ceil((i.x + 0.5) * n),
            r = Math.ceil((i.y + 0.5) * n);
          S(t, {
            transform: `translate(${o}px, ${r}px)`,
            boxShadow:
              0 === i.x && 0 === i.y
                ? "0 0 0 10px rgba(0, 127, 173, 0.2)"
                : "0 0 0 0 rgba(0, 127, 173, 0.2)"
          });
        }
      }),
      I = t => {
        var e = new Date(null);
        return e.setSeconds(t), e.toISOString().substr(14, 5);
      },
      D = c({
        initialize() {
          this.updateNow = this.updateNow.bind(this);
        },
        create: t =>
          C("div", {
            style: {
              position: "absolute",
              right: 0,
              top: "100%",
              marginTop: "5px",
              fontSize: "12px",
              fontWeight: "bold",
              transition: "opacity 200ms",
              opacity: 1,
              color: "#007fad"
            }
          }),
        didUpdate(t) {
          var e = t.started,
            i = this.state,
            n = i.started,
            o = i.finished;
          !e && n
            ? (this.interval = setInterval(this.updateNow, 1e3))
            : o && clearInterval(this.interval);
        },
        willUnmount() {
          clearInterval(this.interval);
        },
        updateNow() {
          this.setState({
            now: new Date()
          });
        },
        update(t, e) {
          var i = e.started,
            n = e.startedAt,
            o = e.now,
            r = I(0);
          i && o ? (r = I((o - n < 0 || o < n ? 0 : o - n) / 1e3)) : (r = I(0));
          O(t, {
            innerHTML: r
          });
        }
      }),
      B = "ActiveXObject" in window,
      U =
        (B && document.addEventListener,
        window.navigator.userAgent.toLowerCase()),
      K = -1 !== U.indexOf("phantom"),
      N = typeof window.orientation != void 0 + "",
      H =
        window.navigator &&
        window.navigator.msPointerEnabled &&
        window.navigator.msMaxTouchPoints &&
        !window.PointerEvent,
      X =
        (window.PointerEvent &&
          window.navigator.pointerEnabled &&
          window.navigator.maxTouchPoints) ||
        H,
      $ =
        (("devicePixelRatio" in window && window.devicePixelRatio > 1) ||
          ("matchMedia" in window &&
            window.matchMedia("(min-resolution:144dpi)") &&
            window.matchMedia("(min-resolution:144dpi)").matches),
        document.documentElement),
      q =
        (!K &&
          (function() {
            if (X || "ontouchstart" in $) return !0;
            var t = document.createElement("div"),
              e = !1;
            !!t.setAttribute &&
              (t.setAttribute("ontouchstart", "return;"),
              "function" == typeof t.ontouchstart && (e = !0),
              t.removeAttribute("ontouchstart"),
              (t = null));
          })(),
        window.navigator.platform && window.navigator.platform,
        window.navigator.maxTouchPoints,
        null != U.match(/ipad/i) ||
          null != U.match(/iphone/i) ||
          U.match(/ipod/i),
        U.includes("android"),
        N);
    F([
      "transform",
      "WebkitTransform",
      "OTransform",
      "MozTransform",
      "msTransform"
    ]),
      F([
        "webkitTransition",
        "transition",
        "OTransition",
        "MozTransition",
        "msTransition"
      ]);
    function F(t) {
      var e,
        i = $.style;
      for (e = 0; e < t.length; e++) if (t[e] in i) return t[e];
      return !1;
    }
    document.createElement("div").addEventListener("test", function() {}, {
      get passive() {
        return !0, !1;
      }
    });
    var Y = {
        position: "absolute",
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
        color: "#fff",
        backgroundColor: "rgba(0, 127, 173, 0.7)",
        fontWeight: "bold",
        transition: "opacity 100ms",
        opacity: 0,
        textAlign: "center",
        padding: "20px",
        display: "flex",
        flexDirection: "column",
        justifyContent: "center"
      },
      G = c({
        create: t =>
          C(
            "div",
            {
              style: Y
            },
            (() =>
              q
                ? document.getElementById("js_offline_translation_mob")
                : document.getElementById("js_offline_translation_desk"))()
          ),
        update(t, e) {
          var i = e.started,
            n = e.finished,
            o = e.idle;
          S(t, {
            opacity: !i && !n && !!o ? 1 : 0
          });
        }
      }),
      J = i(15),
      V = i.n(J),
      Q = c({
        create: t =>
          C("div", {
            className: "offline-page__trophy",
            style: {
              position: "absolute",
              left: 0,
              top: "100%",
              marginTop: "5px",
              fontSize: "12px",
              fontWeight: "bold",
              transition: "opacity 200ms",
              opacity: 1,
              maxWidth: "50%"
            }
          }),
        update(t, e) {
          O(t, {
            innerHTML: (t => {
              for (var e = "", i = 0; i < t; i++) e += V.a;
              return e;
            })(e.winCount)
          });
        }
      }),
      Z = () => {},
      tt = {
        left: {
          x: -1,
          y: 0
        },
        up: {
          x: 0,
          y: -1
        },
        right: {
          x: 1,
          y: 0
        },
        down: {
          x: 0,
          y: 1
        }
      },
      et = {
        37: "left",
        38: "up",
        39: "right",
        40: "down",
        65: "left",
        87: "up",
        68: "right",
        83: "down"
      },
      it = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
      nt = c({
        getInitialState(t) {
          var e = t.width,
            i = t.height,
            n = t.cellSize,
            o = void 0 === n ? 12 : n,
            r = t.pathWidth,
            a = void 0 === r ? 6 : r,
            s = t.radius,
            l = void 0 === s ? 3 : s,
            d = t.wallsWidth,
            h = void 0 === d ? 2 : d,
            u = t.picture,
            c = void 0 === u ? "" : u,
            f = t.onRoundStart,
            v = t.onRoundEnd,
            p = Math.floor((e - h) / o),
            w = Math.floor((i - h) / o),
            m = {
              x: 0,
              y: 0
            };
          return {
            layout: {
              width: e,
              height: i,
              rows: p,
              columns: w,
              offsetX: Math.round((e - p * o) / 2),
              offsetY: Math.round((i - w * o) / 2),
              cellSize: o,
              pathWidth: a,
              radius: l,
              wallsWidth: h,
              picture: c
            },
            maze: b(p, w, c),
            path: [m],
            position: m,
            started: !1,
            startedAt: null,
            finished: !1,
            round: 0,
            winCount: 0,
            onRoundStart: f,
            onRoundEnd: v,
            keyCodeSeries: []
          };
        },
        initialize() {
          (this.handleOrientation = o()(
            this.handleOrientation.bind(this),
            150
          )),
            (this.handleKeyDown = this.handleKeyDown.bind(this)),
            (this.handleIdle = this.handleIdle.bind(this)),
            (this.handleKonamiCode = this.handleKonamiCode.bind(this)),
            (this.reset = this.reset.bind(this));
        },
        create(t) {
          var e = t.layout,
            i = t.maze,
            n = t.path,
            o = t.position,
            r = t.started,
            a = t.startedAt,
            s = t.finished,
            l = t.idle,
            d = t.winCount;
          return [
            new A({
              maze: i,
              layout: e,
              finished: s
            }),
            new R({
              path: n,
              position: o,
              layout: e,
              finished: s
            }),
            new _({
              position: o,
              layout: e
            }),
            new D({
              started: r,
              startedAt: a,
              finished: s
            }),
            new G({
              started: r,
              idle: l
            }),
            new Q({
              winCount: d
            })
          ];
        },
        didMount() {
          document.body.addEventListener("keydown", this.handleKeyDown),
            window.addEventListener(
              "deviceorientation",
              this.handleOrientation,
              !1
            ),
            (this.idleTimer = setTimeout(this.handleIdle, 7e3));
        },
        willUnmount() {
          document.body.removeEventListener("keydown", this.handleKeyDown),
            window.removeEventListener(
              "deviceorientation",
              this.handleOrientation
            ),
            clearTimeout(this.idleTimer);
        },
        reset(t = !1) {
          var e = this.state.layout,
            i = e.rows,
            n = e.columns,
            o = e.picture,
            r = b(i, n, o),
            a = {
              x: 0,
              y: 0
            },
            s = [a];
          this.setState({
            maze: r,
            position: a,
            path: s,
            started: !1,
            startedAt: null,
            finished: !1,
            idle: !1
          });
        },
        move(t) {
          var e = this.state,
            i = e.maze,
            n = e.position,
            o = e.path,
            r = e.started,
            a = e.startedAt,
            s = e.finished,
            l = e.round,
            d = e.onRoundStart,
            h = void 0 === d ? Z : d,
            u = e.onRoundEnd,
            c = void 0 === u ? Z : u;
          if (!s) {
            var f = {
              x: n.x + tt[t].x,
              y: n.y + tt[t].y
            };
            if (
              (clearTimeout(this.idleTimer),
              i.inBounds(f) && !1 === i.get(n)[t])
            ) {
              var v = o.concat(f),
                p = 1 === o.length,
                w = i.isEnd(f),
                m = r ? a : new Date(),
                g = p ? l + 1 : l;
              ((1 === g && 15 === o.length) || (g > 1 && p)) && h(g),
                !s && w && (c(l), this.handleFinish()),
                this.setState({
                  position: f,
                  path: v,
                  started: !0,
                  startedAt: m,
                  idle: !1,
                  round: g
                });
            }
          }
        },
        handleIdle() {
          this.setState({
            idle: !0
          });
        },
        handleFinish() {
          this.state.keyCodeSeries.length = 0;
          var t = this.state.winCount;
          this.setState({
            finished: !0,
            winCount: t + 1
          }),
            setTimeout(this.reset, 3e3);
        },
        handleClickReset() {
          this.reset();
        },
        handleKeyDown({ keyCode: t }) {
          if ((this.handleKonamiCode(t), null != et[t]))
            return this.move(et[t]), !1;
        },
        handleKonamiCode(t) {
          it[this.state.keyCodeSeries.length] === t
            ? this.state.keyCodeSeries.push(t)
            : (this.state.keyCodeSeries.length = 0),
            it.length === this.state.keyCodeSeries.length &&
              this.handleFinish();
        },
        handleOrientation({ beta: t, gamma: e }) {
          Math.abs(t) > 5 && (t > 0 ? this.move("down") : this.move("up")),
            Math.abs(e) > 5 && (e > 0 ? this.move("right") : this.move("left"));
        },
        update(t, e) {
          var i = e.layout,
            n = e.maze,
            o = e.path,
            r = e.position,
            a = e.started,
            s = e.startedAt,
            l = e.finished,
            d = e.idle,
            h = e.winCount,
            u = t[0],
            c = t[1],
            f = t[2],
            v = t[3],
            p = t[4],
            w = t[5];
          u.setState({
            maze: n,
            layout: i,
            finished: l
          }),
            c.setState({
              path: o,
              position: r,
              layout: i,
              finished: l
            }),
            f.setState({
              position: r,
              layout: i
            }),
            v.setState({
              started: a,
              startedAt: s,
              finished: l
            }),
            p.setState({
              started: a,
              idle: d,
              finished: l
            }),
            w.setState({
              winCount: h
            });
        }
      }),
      ot =
        Object.assign ||
        function(t) {
          for (var e = 1; e < arguments.length; e++) {
            var i = arguments[e];
            for (var n in i)
              Object.prototype.hasOwnProperty.call(i, n) && (t[n] = i[n]);
          }
          return t;
        },
      rt = 2;
    var at = i(0);
    i(11), i(61);
    Object(at.a)("100:2315:1");
  }
});
